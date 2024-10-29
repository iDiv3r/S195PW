<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerLibros;


// Route::get('/', function () {
//     return view('inicio');
// });

Route::view('/registro','registro')->name('rRegistro');

Route::view('/','inicio')->name('rInicio');

Route::post('/reg',[ControllerLibros::class,'registrar'])->name('regL');

