<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class, 'inicio'])->name('rutainicio');

Route::get('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');

