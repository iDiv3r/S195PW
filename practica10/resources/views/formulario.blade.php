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
                    {{ __('Registro de clientes') }}
                </div>

                <form action="{{ route('clientes.store') }}" method="POST">

                    @csrf

                    <div class="card-body mb-3">
                        

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Nombre') }} </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtNombre" value={{ old('txtNombre') }}>
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtNombre') }}
                            </strong>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Apellido') }} </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtApellido" value={{ old('txtApellido') }}>
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtApellido') }}
                            </strong>
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Correo') }} </label>
                            <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtCorreo" value={{ old('txtCorreo') }}>
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtCorreo') }}
                            </strong>
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Teléfono') }} </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="txtTelefono" value={{ old('txtTelefono') }}>
                            <strong class="text-danger my-2 fst-italic">
                                {{ $errors->first('txtTelefono') }}
                            </strong>
                        </div>
    
                    </div>
    
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-success" type="submit"> {{ __('Guardar Cliente') }}</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    
@endsection

