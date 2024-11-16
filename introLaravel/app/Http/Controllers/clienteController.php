<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorCliente;
use Psy\CodeCleaner\ValidFunctionNamePass;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;



class clienteController extends Controller
{

    public function home(){
        return view('bienvenida');
    }

    /**
     * Muestra la consulta del CRUD
     */
    public function index()
    {

        $datos = DB::table('clientes')->get();

        return view('clientes',[
            'datos'=>$datos
        ]);
    }

    /**
     * Para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * La usamos para ejecutar el insert 
     */
    public function store(ValidadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre'=>$request->input('txtNombre'),
            'apellido'=>$request->input('txtApellido'),
            'correo'=>$request->input('txtCorreo'),
            'telefono'=>$request->input('txtTelefono'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        $usuario = $request->input('txtNombre');
        
        session()->flash('exito','Se guardó el usuario ' . $usuario);

        return to_route('rutaFormulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
