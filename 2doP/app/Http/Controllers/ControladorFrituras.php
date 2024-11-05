<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Validador;

class ControladorFrituras extends Controller
{
        
    public function abrirFormulario(Validador $request){

        // $nombre = $request->input('nombre');
        // $sabor = $request->input('sabor');
        // $peso = $request->input('peso');

        session()->flash('exito','asd');

        return view('formFrituras',[
            'nom'=>$request->input('nombre'),
            'sab'=>$request->input('sabor'),
            'pe'=>$request->input('peso'),
        ]); 

        // dump($request->input());
    }



}
