<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Http\Requests\ValidadorCliente;

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

    public function procesarCliente(ValidadorCliente $peticion) {

        $id = [
            ['Usuario1'=>1],
            ['Usuario2'=>2]
        ];

        $usuario = $peticion->input('txtNombre');
        


        session()->flash('exito','Se guardó el usuario ' . $usuario);

        return to_route('rutaFormulario');





        // return view('formulario', compact('id'));



        // redireccion a la url
        // return redirect('/');

        // redireccion al nombre de la ruta
        // return redirect()->route('rutaClientes');

        // redireccion al origen de la peticion
        // return back();


        
        # imprimir todos los datos del request
        // return $peticion->all();

        # devolver la ruta de la peticion
        // return $peticion->path();

        # imprimir la url completa de la peticion 
        // return $peticion->url();

        # retornar la ip de la peticion
        // return $peticion->ip()

        // return view('bienvenida',['datos'=> $peticion->all()]);
    }
}
