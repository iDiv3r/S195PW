<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RequestLibros;


class ControllerLibros extends Controller
{
    public function registrar(RequestLibros $request){
        
        session()->flash('exito','Todo correcto: Libro '. $request->titulo. ' guardado.');

        return to_route('rRegistro');

        // return $request->titulo;

    }
}
