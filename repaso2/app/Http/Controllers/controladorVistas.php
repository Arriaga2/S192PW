<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibros; 
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function registro()
    {
        return view('registro');
    }

    public function procesoLibro(validadorLibros $request) 
    {
        $libro = $request->Titulo; 
        session()->flash('Guardado', 'El libro: '.$libro.' se guardó al llavaso');
        return to_route('rutaregistro');
    }
}
