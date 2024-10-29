<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// });

Route::view('/registro','registro')->name('rRegistro');

Route::view('/','inicio')->name('rInicio');