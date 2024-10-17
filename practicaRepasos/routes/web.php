<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Convertidor;

Route::get('/', function () {
    return view('prueba');
});

Route::view('/convertidor','repaso1')->name('rutaConvertidor');

Route::post('/convertirMGB',[Convertidor::class,'convertirMGB'])->name('rutaGMB');


Route::post('/convertirGTB',[Convertidor::class,'convertirGTB'])->name('rutaGTB');  