<!-- resources/views/chollos/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Chollo</h2>
    <form method="POST" action="{{ route('chollos.store') }}">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="url">URL:</label>
            <input type="url" class="form-control" id="url" name="url" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" required>
        </div>
        <div class="form-group">
            <label for="puntuacion">Puntuación:</label>
            <input type="number" class="form-control" id="puntuacion" name="puntuacion" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="form-group">
            <label for="precio_descuento">Precio con Descuento:</label>
            <input type="number" step="0.01" class="form-control" id="precio_descuento" name="precio_descuento" required>
        </div>
        <div class="form-group">
            <label for="disponible">Disponible:</label>
            <select class="form-control" id="disponible" name="disponible" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Chollo</button>
    </form>
</div>
@endsection
