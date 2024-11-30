<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;


# Rutas de controladorVistas 


Route::view('/componentes','componentes')->name('rutaComponentes');




# Rutas de cliente Controller

Route::get('/clientes/create',[clienteController::class,'create'])->name('rutaFormulario');

Route::post('/enviar',[clienteController::class,'store'])->name('procesarCliente');

Route::get('/clientes',[clienteController::class,'index'])->name('rutaClientes');

Route::get('/',[clienteController::class,'home'])->name('rutaBienvenida');

Route::post('/updateCliente',[clienteController::class,'update'])->name('rutaUpdateCliente');

Route::post('/deleteCliente',[clienteController::class,'destroy'])->name('rutaDeleteCliente');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/','bienvenida')->name('rutaBienvenida');

// Route::view('/formulario','formulario')->name('rutaFormulario');

// Route::view('/clientes','clientes')->name('rutaClientes');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
