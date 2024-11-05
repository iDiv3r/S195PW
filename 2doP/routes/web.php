<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorFrituras;

// Route::get('/', function () {
//     return view('formFrituras');
// })->name('inicio');
Route::view('/','formFrituras')->name('rutaInicio');

Route::post('/enviar',[ControladorFrituras::class,'abrirFormulario'])->name('rutaEnviar');

