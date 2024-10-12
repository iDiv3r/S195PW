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
}
