<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVista; 

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/principal', [controladorVista::class, 'principal'])->name('rutaprincipal');

Route::get('/inicio', [controladorVista::class, 'inicio'])->name('rutainicio');

Route::get('/repaso1', [controladorVista::class, 'repaso1'])->name('rutarepaso');

Route::post('/convertir', [controladorVista::class, 'convertir'])->name('convertir');
