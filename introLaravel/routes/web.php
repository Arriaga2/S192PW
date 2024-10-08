<?php

use Illuminate\Support\Facades\Route;

//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
Route::view('inicio/', 'inicio')->name('rutainicio');

Route::view('/form', 'formulario')->name('rutaform');

Route::view('/client', 'clientes')->name('rutaclientes');