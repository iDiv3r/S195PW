@extends('layouts.plantilla')

@section('titulo','Formulario')
    

@section('content')


    {{-- @if (session('exito'))
    <x-Alert tipo='success'>
        {{ session('exito') }}
    </x-Alert>
    @endif --}}

    {{-- @if (isset($id))
        @dump($id)
    @endif --}}


    {{-- @session('exito')
        <x-Alert tipo="success">
            {{ $value }}
        </x-Alert>
    @endsession --}}


    @session('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: '{{ $value }}',
                icon: "success"
            });
        </script>
    @endsession 

    <div class="flex justify-text-center mt-5">
        <div class="container col-3">
            <div class="card text-center">
                <div class="card-header">
                    Formulario
                </div>

                <form action="{{ route('procesarCliente') }}" method="POST">

                    @csrf

                    <div class="card-body mb-3">
                        

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtNombre">
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtNombre') }}
                            </strong>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtApellido">
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtApellido') }}
                            </strong>
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                            <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtCorreo">
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtCorreo') }}
                            </strong>
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtTelefono">
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtTelefono') }}
                            </strong>
                        </div>
    
                    </div>
    
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-success" type="submit"> Enviar</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    
@endsection

