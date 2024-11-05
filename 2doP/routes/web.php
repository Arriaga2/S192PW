<?php

use App\Http\Controllers\peticion;
use Illuminate\Support\Facades\Route;


Route::get('/formUsuarios', [peticion::class, 'formUsuarios'])->name('rutausuarios');
Route::post('/formUsuarios', [peticion::class, 'proceso'])->name('ruta.proceso');
