@extends('layouts.plantilla')

@section('titulo','Clientes')

@section('content')
    
    <div class="container mt-5 col-md-8">
        <div class="card tect-justify font-monospace">
            <div class="card-header fs-5 text-primary">
                Ivan Isay Guerra
            </div>
            <div class="card-body">
                <h5 class="fw-bold">ivan.guerra@outlook.com</h5>
                <h5 class="fw-medium"> 23123123</h5>
                <p class="card-text fw-lighter"></p>
            </div>

            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </div>
        </div>

    </div>
@endsection

