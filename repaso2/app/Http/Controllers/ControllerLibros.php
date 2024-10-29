<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RequestLibros;


class ControllerLibros extends Controller
{
    public function registrar(RequestLibros $request){
        return 'Hola';
    }
}
