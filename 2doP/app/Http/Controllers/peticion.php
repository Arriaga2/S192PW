<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peticion extends Controller
{
    public function formUsuarios()
    {
        return view('formUsuarios');
    }

    public function proceso(Request $request) 
    {
        $correo = $request->input('Correo');
        $contraseña = $request->input('Contraseña');
        $edad = $request->input('Edad');

        session()->flash('Guardado', 'Usuario: ' . $correo . ' se guardó con éxito');
        
        return to_route('rutausuarios');
    }
}
