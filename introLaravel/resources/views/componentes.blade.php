@extends('layouts.plantilla')

@section('titulo','Componentes Blade')


@section('content')

    <x-Alert tipo="success"> 
        Alert Verde
    </x-Alert>

    <x-Alert tipo="danger"> 
        Alert Rojo
    </x-Alert>



    <x-Card encabezado="Hola1 s195" titulo="Titulo 1" textoBoton="Boton 1">
    
        Prueba slot 1

    </x-Card>

    <x-Card encabezado="Hola2 s195" titulo="Titulo 2" textoBoton="Boton 2"> 

        Prueba Slot 2

    </x-Card>

    <x-Card encabezado="Hola3 s195" titulo="Titulo 3" textoBoton="Boton 3">
    
        Prueba Slot 3

    </x-Card>
    
    

@endsection

