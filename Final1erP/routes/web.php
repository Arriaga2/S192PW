<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});
 
Route::view('inicio/', 'inicio')->name('rutainicio'); 

Route::view('/form', 'formulario')->name('rutaform');

Route::view('/list', 'lista')->name('rutalista');


