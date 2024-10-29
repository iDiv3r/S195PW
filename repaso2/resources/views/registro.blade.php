@extends('app')

@section('title','Registro')

@section('content')

    <div class="container mt-5 w-50">
        <div class="">
            <form action="">
                <span class="fs-1">{{__('Formulario de Registro')}}</span>

                <div class="my-3">
                    <label for="formGroupExampleInput" class="form-label">ISBN</label>
                    <input required type="text" class="form-control" id="formGroupExampleInput" placeholder="...">
                </div>

                <div class="my-3">
                    <label for="formGroupExampleInput2" class="form-label">Título</label>
                    <input required type="text" class="form-control" id="formGroupExampleInput2" placeholder="...">
                </div>

                <div class="d-flex justify-content-around">
    
                    <div class="my-3 px-3">
                        <label for="formGroupExampleInput" class="form-label">Número de páginas</label>
                        <input required type="number" min="1" step="1" onkeypress="return event.charCode >= 48" class="form-control" id="formGroupExampleInput" placeholder="...">
                    </div>
                    <div class="my-3 px-3">
                        <label for="formGroupExampleInput2" class="form-label">Año</label>
                        <input required type="number" min="1" step="1" onkeypress="return event.charCode >= 48" class="form-control" id="formGroupExampleInput2" placeholder="...">
                    </div>
                </div>

                <div class="my-3">
                    <label for="formGroupExampleInput" class="form-label">E-mail de la Editorial</label>
                    <input required type="mail" class="form-control" id="formGroupExampleInput" placeholder="...">
                </div>
                
                <button type="submit" class="btn btn-outline-info my-3">Enviar</button>
            </form>
        </div>
    </div>

@endsection

