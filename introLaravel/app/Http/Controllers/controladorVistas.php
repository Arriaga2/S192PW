<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    /*public function formulario(){
        return view('formulario');
    }*/

    public function consulta(){

    }
    public function procesarCliente(validadorClientes $peticionValidada){

        //redireccion con valores en session
        $usuario= $peticionValidada->input('txtnombre');

        session()->flash('exito','se guardo el usuario '.$usuario);

        return to_route('rutaform');

    }
}


 // return 'La informacion del cliente llego al controlador';

        //devuelve todo lo que contiene la peticion
        //return $peticion->all();

        //la ruta se hizo de donde se hizo la peticion
        //return $peticion->path();

        //la ruta url completa  de la peticion
        //return $peticion->url();

        //la ruta url completa  de la peticion
        //return $peticion->ip();
        
        //respuesytas de redireccion
        //return redirect()->route('rutaclientes');

        //redireccion al origen
        //return back();
