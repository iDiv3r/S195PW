<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>

    
    {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Éxito</strong> La fritura: {{}} se ha registrado correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">

    <form action="{{ route('rutaEnviar')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" >
            <strong class="text-danger">
                {{ $errors->first('nombre') }}
            </strong>
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" class="form-control" name="sabor" >
            <strong class="text-danger">
                {{ $errors->first('sabor') }}
            </strong>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" class="form-control" name="peso"  >
            <strong class="text-danger">
                {{ $errors->first('peso') }}
            </strong>
        </div>

        <button type="" class="btn btn-primary "> Guardar Fritura</button>
</div>

</body>
</html>