<?php

use Illuminate\Support\Facades\Route;

//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
Route::view('inicio', 'inicio') ->name ("inicio");

Route::view('form', 'formulario') ->name ('formulario');

Route::view('client', 'clientes') ->name ('clientes');