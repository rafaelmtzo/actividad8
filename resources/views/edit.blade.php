<!-- resources/views/superheroes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('superheroes.form')
        <button type="submit">Actualizar</button>
    </form>
@endsection
