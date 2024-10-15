<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('bienvenida');
    }

    public function formulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('clientes');
        
    }

    public function procesarCliente(Request $peticion){

        # imprimir todos los datos del request
        // return $peticion->all();

        # devolver la ruta de la peticion
        // return $peticion->path();

        # imprimir la url completa de la peticion 
        // return $peticion->url();

        # retornar la ip de la peticion
        // return $peticion->ip()

        return view('bienvenida',['datos'=> $peticion->all()]);
    }
}
