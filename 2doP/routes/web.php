<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorFrituras;

Route::get('/', function () {
    return view('formFrituras');
});

Route::post('/enviar',[ControladorFrituras::class,'abrirFormulario'])->name('rutaEnviar');

