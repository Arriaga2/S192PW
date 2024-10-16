<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVista extends Controller
{

    public function principal(){
        return view('inicio');
    }
    public function inicio(){
        return view('principal');
    }
    public function repaso1(){
        return view('repaso1');
    }
    public function convertir(Request $request)
    {

        // atos del formulario
        $valor = $request->input('valor');
        $unidad = $request->input('unidad');

        // hace como una iniciacion del resultado
        $resultado = '';
        
        switch ($unidad) {
            case 'MBtoGB':
                $resultado = $valor . ' MB son ' . $this->convertirMBaGB($valor) . ' GB.';
                break;
            case 'GBtoMB':
                $resultado = $valor . ' GB son ' . $this->convertirGBaMB($valor) . ' MB.';
                break;
            case 'GBtoTB':
                $resultado = $valor . ' GB son ' . $this->convertirGBaTB($valor) . ' TB.';
                break;
            case 'TBtoGB':
                $resultado = $valor . ' TB son ' . $this->convertirTBaGB($valor) . ' GB.';
                break;
            default:
                $resultado = 'Unidad no válida.';
                break;
        }

        // l resultado como una cadena
        return $resultado;
    }
    private function convertirMBaGB($mb)
    {
        return $mb / 1000;
    }

    private function convertirGBaMB($gb)
    {
        return $gb * 1000;
    }

    private function convertirGBaTB($gb)
    {
        return $gb / 1000;
    }

    private function convertirTBaGB($tb)
    {
        return $tb * 1000;
    }

}
