@extends('app')

@section('title','Registro')

@section('content')

    <div class="container mt-5 w-50">
        <div class="">
            <form action="{{ route('regL') }}" method="POST">
                
                @csrf

                <span class="fs-1">{{__('Formulario de Registro')}}</span>

                <div class="my-3">
                    <label for="formGroupExampleInput" class="form-label">ISBN</label>
                    <input  type="number" min="1" step="1" 
                    onkeypress="return event.charCode >= 48" 
                    class="form-control" id="formGroupExampleInput" placeholder="..." name="isbn">
                    <strong class="text-danger my-2 fst-italic">
                        {{ $errors->first('isbn') }}
                    </strong>
                </div>

                <div class="my-3">
                    <label for="formGroupExampleInput2" class="form-label">Título</label>
                    <input  type="text" class="form-control" id="formGroupExampleInput2" placeholder="..." name="titulo">
                    <strong class="text-danger my-2 fst-italic">
                        {{ $errors->first('titulo') }}
                    </strong>
                </div>

                <div class="d-flex justify-content-around">
    
                    <div class="my-3 px-3">
                        <label for="formGroupExampleInput" class="form-label">Número de páginas</label>
                        <input  type="number" min="1" step="1" 
                        onkeypress="return event.charCode >= 48" 
                        class="form-control" id="formGroupExampleInput" placeholder="..." name="pags">
                        <strong class="text-danger my-2 fst-italic">
                            {{ $errors->first('pags') }}
                        </strong>
                    </div>
                    <div class="my-3 px-3">
                        <label for="formGroupExampleInput2" class="form-label">Año</label>
                        <input  type="number" min="1" step="1" 
                        onkeypress="return event.charCode >= 48" 
                        class="form-control" id="formGroupExampleInput2" placeholder="..." name="year">
                        <strong class="text-danger my-2 fst-italic">
                            {{ $errors->first('year') }}
                        </strong>
                    </div>
                </div>

                <div class="my-3">
                    <label for="formGroupExampleInput" class="form-label">E-mail de la Editorial</label>
                    <input  type="mail" class="form-control" id="formGroupExampleInput" placeholder="..." name="mail">
                    <strong class="text-danger my-2 fst-italic">
                        {{ $errors->first('mail') }}
                    </strong>
                </div>
                
                <button type="submit" class="btn btn-outline-info my-3">Enviar</button>
            </form>
        </div>
    </div>

@endsection

