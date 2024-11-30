<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::view('/','bienvenida')->name('rutaBienvenida');

Route::resource('clientes',ClienteController::class);





// Route::get('/clientes/create',function (){return view('formulario');})->name('rutaFormulario');

// Route::get('/clientes',function(){ return view('clientes');})->name('rutaClientes');

// Route::post('/enviar',function(){})->name('procesarCliente');

// Route::post('/updateCliente',function(){})->name('rutaUpdateCliente');

// Route::post('/deleteCliente',function(){})->name('rutaDeleteCliente');



