<!-- resources/views/superheroes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Superhéroe</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        @include('superheroes.form')
        <button type="submit">Guardar</button>
    </form>
@endsection
