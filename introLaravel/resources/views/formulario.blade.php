@extends('layouts.plantilla')

@section('titulo','Formulario')
    

@section('content')

    <div class="flex justify-text-center mt-5">
        <div class="container col-3">
            <div class="card text-center">
                <div class="card-header">
                    Formulario
                </div>

                <form action="">

                    <div class="card-body mb-3">
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                            <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
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

