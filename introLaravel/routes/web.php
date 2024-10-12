<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;


Route::get('/',[controladorVistas::class,'home'])->name('rutaBienvenida');

Route::get('/formulario',[controladorVistas::class,'formulario'])->name('rutaFormulario');

Route::get('/clientes',[controladorVistas::class,'consulta'])->name('rutaClientes');

Route::view('/componentes','componentes')->name('rutaComponentes');




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
