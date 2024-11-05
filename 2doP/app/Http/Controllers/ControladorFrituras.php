<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Validador;

class ControladorFrituras extends Controller
{
        
    public function abrirFormulario(Validador $request){


        session()->flash('exito', $request->nombre);

        
        return to_route('rutaInicio');
        
    
    }



}
