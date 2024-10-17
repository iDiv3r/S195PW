<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container text-center mt-5">
        <div class="row justify-content-center flex">
            <h1>Practica Repaso</h1>
            <span class="mt-4 fs-4">Nombre: Pérez San Luis Emiliano Alexander</span>
            <span class="mt-4 fs-4">Matrícula: 122043651</span>
            <span class="mt-4 fs-4">Grupo: S-195</span>
            <span class="mt-4 fs-4">Tema: Repaso</span>
            <span class="mt-4 fs-4">Fecha: 16-10-2024</span>
            <div class="container row justify-content-center flex">

                <img src="{{ asset('image.png') }}" alt="" class="mt-3 col-2">
            </div>
            
            <a href="{{ route('rutaConvertidor') }}" class="btn btn-info text-white mt-4 col-1">REPASO 1</a>
        </div>
    </div>
</body>
</html>