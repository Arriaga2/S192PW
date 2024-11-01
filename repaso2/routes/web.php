<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');
Route::post('registrarLibro', [controladorVistas::class, 'procesoLibro'])->name('rutaEnviar');
