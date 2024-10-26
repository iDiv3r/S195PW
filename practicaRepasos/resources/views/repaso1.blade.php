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
    <div class="ps-5 flex row justify-content-center text-center w-100 ">
        <h1 class="mt-5">Calculadora de Bytes</h1>

        <div class="container col-3 row mt-5">

            <form action="{{ route('rutaGMB') }}" method="POST">

                @if (isset($resultado1))

                    <span class="mb-3 fw-bold">El resultado es {{ $resultado1}} @if ($opcion == 1) GB @elseif($opcion == 2) MB @endif </span>

                @endif

                @csrf


                <div class="input-group mb-3 mt-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">MegaBytes</span>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mb">
                </div>
                
                
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">GigaBytes</span>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gb1">
                </div>
    
                <select class="form-select" aria-label="Default select example" name="opcion1">
                    <option selected value="1">MB a GB</option>
                    <option value="2">GB a MB</option>
                </select>
    
                <button class="btn btn-danger my-3 " type="submit">Enviar</button>
            </form>

        </div>

        <hr>

        <div class="col-3  row mt-5">

            <form action="{{ route('rutaGTB') }}" method="POST">

                
                @if (isset($resultado2))

                    <span class="mb-3 fw-bold">El resultado es {{ $resultado2}} @if ($opcion2 == 1) TB @elseif($opcion2 == 2) GB @endif </span>

                @endif
                
                @csrf

                <div class="input-group mb-3 mt-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">GigaBytes</span>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gb2">
                </div>
                
                
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">TeraBytes</span>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tb">
                </div>
    
                <select class="form-select" aria-label="Default select example" name="opcion2">
                    <option selected value="1">GB a TB</option>
                    <option value="2">TB a GB</option>
                </select>
    
                <button class="btn btn-warning mt-3" type="submit">Enviar</button>

            </form>

            
        </div>
    
    </div>


</body>
</html>