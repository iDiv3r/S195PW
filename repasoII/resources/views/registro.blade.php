@extends('app')

@section('title',__('Register'))

@section('content')


    @session('exito')
        {{-- <script> 
                Swal.fire({
                    title: "¡Éxito!",
                    text: "{{ $value }}",
                    icon: "success"
                    });
        </script> --}}

        <script>
            alertify.alert('Éxito', '{{ $value }}');
        </script>
    @endsession

    <div class="container mt-5 w-50">
        <div class="">
            <form action="{{ route('regL') }}" method="POST">
                
                @csrf

                <span class="fs-1">{{__('Register Book')}}</span>

                <div class="my-3">
                    <label for="formGroupExampleInput" class="form-label">ISBN</label>
                    <input  type="number" min="1" step="1" 
                    onkeypress="return event.charCode >= 48" 
                    class="form-control" id="formGroupExampleInput" placeholder="..." name="isbn" value="{{ old('isbn')}}">
                    <strong class="text-danger my-2 fst-italic">
                        {{ $errors->first('isbn') }}
                    </strong>
                </div>

                <div class="my-3">
                    <label for="formGroupExampleInput2" class="form-label">{{__('Book Title')}}</label>
                    <input  type="text" class="form-control" id="formGroupExampleInput2" placeholder="..." name="titulo" value="{{ old('titulo')}}">
                    <strong class="text-danger my-2 fst-italic">
                        {{ $errors->first('titulo') }}
                    </strong>
                </div>

                <div class="d-flex justify-content-around">
    
                    <div class="my-3 px-3">
                        <label for="formGroupExampleInput" class="form-label">{{__('No. of pages')}}</label>
                        <input  type="number" min="1" step="1" 
                        onkeypress="return event.charCode >= 48" 
                        class="form-control" id="formGroupExampleInput" placeholder="..." name="pags" value="{{ old('pags')}}">
                        <strong class="text-danger my-2 fst-italic">
                            {{ $errors->first('pags') }}
                        </strong>
                    </div>
                    <div class="my-3 px-3">
                        <label for="formGroupExampleInput2" class="form-label">{{__('Year')}}</label>
                        <input  type="number" min="1" step="1" 
                        {{-- onkeypress="return event.charCode >= 48"  --}}
                        class="form-control" id="formGroupExampleInput2" placeholder="..." name="year" value="{{ old('year')}}">
                        <strong class="text-danger my-2 fst-italic">
                            {{ $errors->first('year') }}
                        </strong>
                    </div>
                </div>

                <div class="my-3">
                    <label for="formGroupExampleInput" class="form-label">{{__('Editorials E-mail')}}</label>
                    <input  type="mail" class="form-control" id="formGroupExampleInput" placeholder="..." name="mail" value="{{ old('mail')}}">
                    <strong class="text-danger my-2 fst-italic">
                        {{ $errors->first('mail') }}
                    </strong>
                </div>
                
                <button type="submit" class="btn btn-outline-info my-3">{{__('Send')}}</button>
            </form>
            
        </div>
    </div>

@endsection

