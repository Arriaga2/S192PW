<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    public function formulario(){
        return view('formulario');
    }
    public function consulta(){
        return view('clientes');
    }
    public function procesarCliente(Request $peticion){
        // return 'La informacion del cliente llego al controlador';

        //devuelve todo lo que contiene la peticion
        //return $peticion->all();

        //la ruta se hizo de donde se hizo la peticion
        //return $peticion->path();

        //la ruta url completa  de la peticion
        //return $peticion->url();

        //la ruta url completa  de la peticion
        return $peticion->ip();
    }
}
