@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <div class="container">
        <h2 class="my-4">Chollos Disponibles</h2>
        <div class="row">
            @foreach ($chollos as $chollo)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" class="card-img-top" alt="{{ $chollo->titulo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chollo->titulo }}</h5>
                            <p class="card-text">{{ $chollo->descripcion }}</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Precio: {{ $chollo->precio }}</li>
                                <li class="list-group-item">Precio con Descuento: {{ $chollo->precio_descuento }}</li>
                                <li class="list-group-item">Puntuación: {{ $chollo->puntuacion }}</li>
                                <li class="list-group-item">Disponible: {{ $chollo->disponible ? 'Sí' : 'No' }}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                                <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Borrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Agregar enlace para crear un nuevo chollo -->
        <div class="text-center">
            <a href="{{ route('chollos.create') }}" class="btn btn-success">Crear Nuevo Chollo</a>
        </div>
    </div>
@endsection
