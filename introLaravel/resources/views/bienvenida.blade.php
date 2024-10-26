<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])

</head>
<body>

    @if (isset($datos))
        @foreach ($datos as $dato)

        <span>{{    $dato}}</span>

        @endforeach
    @endif

    <div class="h-100">
        <div class="flex text-center mt-5 position-absolute top-50 start-50 translate-middle">
            <div class="container" >
                <span class="fs-1">Bienvenido a Turista sin maps</span>
                <br>
                <p>Presiona el botón para iniciar</p>
                <a href="{{ route('rutaFormulario') }}" class="btn btn-primary"> Ir al registro</a>
                {{-- <a href="/formulario" class="btn btn-primary"> Ir al registro</a> --}}
            </div>
        </div>
    </div>
    


</body>
</html>