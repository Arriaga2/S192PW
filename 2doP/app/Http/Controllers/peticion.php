<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peticion extends Controller

@@ -9,7 +10,16 @@ class controladorVistas extends Controller
    public function inicio(){
        return view('inicio');
    }

    public function registro(){
        return view('registro');
    }

    public function procesarLibro(validadorLibros $request){
        $titulo = $request->input('titulo');

        session()->flash('exito', 'El libro "' . $titulo . '" ha sido registrado exitosamente.');

        return redirect()->route('rutaregistro'); 
    }
}