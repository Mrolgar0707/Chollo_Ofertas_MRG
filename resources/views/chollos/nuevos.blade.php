@extends('layouts.layout')

@section('title', 'Nuevos Chollos')

@section('content')
    <div class="container">
        <h2>Nuevos Chollos</h2>
        <div class="chollos-list">
            @foreach ($chollos as $chollo)
                <div class="chollo-item">
                    <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" alt="{{ $chollo->titulo }}">
                    <h3>{{ $chollo->titulo }}</h3>
                    <p>{{ $chollo->descripcion }}</p>
                    <p>Precio: {{ $chollo->precio }}</p>
                    <p>Precio con Descuento: {{ $chollo->precio_descuento }}</p>
                    <p>Puntuación: {{ $chollo->puntuacion }}</p>
                    <!-- No incluir el campo 'Disponible' en esta vista -->
                    <div class="buttons">
                        <a href="{{ route('chollos.edit', $chollo->id) }}"><button><i class="fa fa-edit"></i> Editar</button></a>
                        <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa fa-trash"></i> Borrar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
