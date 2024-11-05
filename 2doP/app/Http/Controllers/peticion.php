<?php

namespace App\Http\Controllers;

use App\Http\Requests\proceso;
use Illuminate\Http\Request;

class peticion extends Controller
{
    public function formUsuarios()
    {
        return view('formUsuarios');
    }
    public function proceso( $request) 
    {
        $request = $request->Correo; 
        $request = $request->Contraseña; 
        $request = $request->Edad; 
        session()->flash('Guardado', 'Usuario: '.$request.' se guardó al llavaso');
        return to_route('formUsuarios');
    }
}
