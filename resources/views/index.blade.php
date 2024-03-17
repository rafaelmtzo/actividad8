<!-- resources/views/superheroes/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Listado de Superhéroes</h1>
    <ul>
        @foreach ($superheroes as $superhero)
            <li><a href="{{ route('superheroes.show', $superhero->id) }}">{{ $superhero->superhero_name }}</a></li>
        @endforeach
    </ul>
@endsection
