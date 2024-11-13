<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


//controlador vistas

Route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');

Route::get('/form', [controladorVistas::class, 'formulario'])->name('rutaform');

Route::get('/clientes', [controladorVistas::class, 'consulta'])->name('rutaclientes');

Route::view('/component', 'componentes')->name('rutacomponentes');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

// controlador clientes

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');

Route::post('/cliente', [clienteController::class, 'store'])->name('enviaCliente');











//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
/* Route::view('inicio/', 'inicio')->name('rutainicio');

Route::view('/form', 'formulario')->name('rutaform');

Route::view('/client', 'clientes')->name('rutaclientes');

Route::view('/component', 'componentes')->name('rutacomponentes'); */

