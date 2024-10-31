<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function registro(){
        return view('registro');
    }
}
