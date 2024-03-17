<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el CRUD de superhéroes
Route::resource('superheroes', 'SuperheroController');
