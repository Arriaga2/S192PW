<?php

use Illuminate\Support\Facades\Route;

//ruta de tipo Get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta de tipo View
Route::view('/','welcome');
Route::view('/form','formulario');