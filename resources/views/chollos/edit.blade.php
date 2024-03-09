<!-- resources/views/chollos/edit.blade.php -->

@extends('layouts.layout')

@section('title', 'Editar Chollo')

@section('content')
    <div class="container">
        <h2>Editar Chollo</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('chollos.update', $chollo->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $chollo->titulo) }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $chollo->descripcion) }}</textarea>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $chollo->url) }}" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria', $chollo->categoria) }}" required>
            </div>
            <div class="form-group">
                <label for="puntuacion">Puntuación:</label>
                <input type="number" class="form-control" id="puntuacion" name="puntuacion" value="{{ old('puntuacion', $chollo->puntuacion) }}" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ old('precio', $chollo->precio) }}" required>
            </div>
            <div class="form-group">
                <label for="precio_descuento">Precio con Descuento:</label>
                <input type="number" step="0.01" class="form-control" id="precio_descuento" name="precio_descuento" value="{{ old('precio_descuento', $chollo->precio_descuento) }}" required>
            </div>
            <div class="form-group">
                <label for="disponible">Disponible:</label>
                <select class="form-control" id="disponible" name="disponible" required>
                    <option value="1" {{ $chollo->disponible ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$chollo->disponible ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Chollo</button>
        </form>
    </div>
@endsection
