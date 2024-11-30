@extends('layouts.plantilla')

@section('titulo','Clientes')

@section('content')
    

    @session('exito')
    <script>
        Swal.fire({
            title: "Respuesta del servidor",
            text: '{{ $value }}',
            icon: "success"
        });
    </script>
    @endsession 

    

    @foreach ($datos as $cliente)   
        <div class="container mt-5 col-md-8">
            <div class="card tect-justify font-monospace">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre . " " . $cliente->apellido}} 
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                    <h5 class="fw-medium"> {{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter"></p>
                </div>

                <div class="card-footer text-muted">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-list-stars"></i> Opciones
                            </button>
                            <ul class="dropdown-menu">
                                <a type="button" class="text-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$cliente->id}}">
                                    <i class="bi bi-pencil-square"></i>Editar 
                                </a>
                                <br>
                                <a type="button" class="text-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$cliente->id}}">
                                    <i class="bi bi-trash"></i> Borrar 
                                </a>
                            </ul>
                        </div> 
                </div>
            </div>

        </div>
        
        @include('options')
        
    @endforeach
    
    
    
@endsection


        