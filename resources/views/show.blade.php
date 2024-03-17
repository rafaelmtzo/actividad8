<!-- resources/views/superheroes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $superhero->superhero_name }}</h1>
    <p><strong>Nombre real:</strong> {{ $superhero->real_name }}</p>
    <p><strong>URL de la foto:</strong> <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}"></p>
    <p><strong>Información adicional:</strong> {{ $superhero->additional_info }}</p>
    <a href="{{ route('superheroes.edit', $superhero->id) }}">Editar</a>
    <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
