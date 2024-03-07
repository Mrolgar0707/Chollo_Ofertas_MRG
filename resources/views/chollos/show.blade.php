<!-- resources/views/chollos/show.blade.php -->

@extends('layouts.layout')

@section('title', $chollo->titulo)

@section('content')
    <div class="container">
        <div class="chollo-detail">
            <h2>{{ $chollo->titulo }}</h2>
            <p>{{ $chollo->descripcion }}</p>
            <p>Precio: {{ $chollo->precio }}</p>
            <p>Precio con Descuento: {{ $chollo->precio_descuento }}</p>
            <p>Puntuación: {{ $chollo->puntuacion }}</p>
        </div>
    </div>
@endsection
