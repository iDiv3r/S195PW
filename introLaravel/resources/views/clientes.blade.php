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
                    {{-- <button type="submit" class="btn btn-warning "></button> --}}
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#update{{ $cliente->id }}">
                        {{__('Actualizar')}}
                    </button>
                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $cliente->id }}">
                        {{__('Eliminar')}}</button>
                </div>
            </div>

        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="update{{ $cliente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar cliente: {{ $cliente->nombre }} </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('rutaUpdateCliente') }}" method="POST">

                            @csrf

                            <input type="text" hidden value="{{ $cliente->id }}" name="idCliente">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{__('Nombre')}}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="{{ 'txtNombre' . $cliente->id  }}" value="{{ old('txtNombre' . $cliente->id ) !== null ? old('txtNombre' . $cliente->id):$cliente->nombre }}">
                                <strong class="text-danger fs-sm">
                                    {{ $errors->first('txtNombre' . $cliente->id) }}
                                </strong>
                            </div>
    
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{__('Apellido')}}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="{{ 'txtApellido' . $cliente->id  }}" value="{{ old('txtApellido' . $cliente->id ) !== null ? old('txtApellido' . $cliente->id):$cliente->apellido }}">
                                <strong class="text-danger fs-sm">
                                    {{ $errors->first('txtApellido' . $cliente->id) }}
                                </strong>
                            </div>
    
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{__('Correo')}}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="{{ 'txtCorreo' . $cliente->id  }}" value="{{ old('txtCorreo' . $cliente->id ) !== null ? old('txtCorreo' . $cliente->id):$cliente->correo }}">
                                <strong class="text-danger fs-sm">
                                    {{ $errors->first('txtCorreo' . $cliente->id) }}
                                </strong>
                            </div>
    
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{__('Teléfono')}}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="{{ 'txtTelefono' . $cliente->id  }}" value="{{ old('txtTelefono' . $cliente->id ) !== null ? old('txtTelefono' . $cliente->id):$cliente->telefono }}">
                                <strong class="text-danger fs-sm">
                                    {{ $errors->first('txtTelefono' . $cliente->id) }}
                                </strong>
                            </div>

                            
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('Cancelar')}}</button>
                            <button type="submit" class="btn btn-warning">{{__('Actualizar')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delete{{ $cliente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Cliente: {{ $cliente->nombre }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('rutaDeleteCliente') }}" method="POST">

                            @csrf

                            <input type="number" hidden value="{{ $cliente->id }}" name="idCliente">

                            <input type="number" hidden value="{{ $cliente->nombre }}" name="nomCliente">

                            <span class="fs-3">
                                ¿Seguro que deseas eliminar al cliente: 
                            </span>

                            <span class="fs-3 text-danger">
                                {{ $cliente->nombre }}
                            </span>

                            <span class="fs-3">
                                ?
                            </span>
                            
                            <div class="div mt-5">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach

@endsection


