<!-- resources/views/chollos/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Chollo</h2>
    <form method="POST" action="{{ route('chollos.update', $chollo->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $chollo->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $chollo->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="url">URL:</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ $chollo->url }}" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $chollo->categoria }}" required>
        </div>
        <div class="form-group">
            <label for="puntuacion">Puntuación:</label>
            <input type="number" class="form-control" id="puntuacion" name="puntuacion" value="{{ $chollo->puntuacion }}" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $chollo->precio }}" required>
        </div>
        <div class="form-group">
            <label for="precio_descuento">Precio con Descuento:</label>
            <input type="number" step="0.01" class="form-control" id="precio_descuento" name="precio_descuento" value="{{ $chollo->precio_descuento }}" required>
        </div>
        <div class="form-group">
            <label for="disponible">Disponible:</label>
            <select class="form-control" id="disponible" name="disponible" required>
                <option value="1" {{ $chollo->disponible == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ $chollo->disponible == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Chollo</button>
    </form>
</div>
@endsection
