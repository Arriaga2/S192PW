<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('rutainicio');

Route::view('/registro', 'registro')->name('rutaregistro');
