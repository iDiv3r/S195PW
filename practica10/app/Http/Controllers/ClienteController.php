<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datos = cliente::all();

        return view('clientes',[
            'datos' => $datos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = new cliente();

        $insert->nombre = $request->input('txtNombre');
        $insert->apellido = $request->input('txtApellido');
        $insert->correo = $request->input('txtCorreo');
        $insert->telefono = $request->input('txtTelefono');
        $insert->save();

        $cliente = $request->input('txtNombre');

        session()->flash('exito','Se guardó el usuario ' . $cliente);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cliente)
    {
        $editar = cliente::find($cliente);

        $editar->nombre = $request->input('nombre');
        $editar->apellido = $request->input('apellido');
        $editar->correo = $request->input('correo');
        $editar->telefono = $request->input('telefono');
        $editar->save();

        session()->flash('exito','Se ha actualizado el cliente: ' . $request->input('nombre'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(string $cliente)
    {
        $cliente = cliente::find($cliente);
        
        session()->flash('exito','Se ha actualizado el cliente: ' . $cliente->nombre);
        
        $cliente->delete();


        return redirect()->back();
    }
}
