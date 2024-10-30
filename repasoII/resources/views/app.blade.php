<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}


        <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>

    <!-- 
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.rtl.min.css"/>

    <title>
        @yield('title')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-danger ">
        <div class="container-fluid">
            <span class="navbar-brand fs-3" href="#">Biblioteca ASD </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link fs-5 {{ request()->routeIs('rInicio')?'text-danger fw-bold ' : 'text-dark' }} " aria-current="page" href="{{ route('rInicio') }}">{{__('Start')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 {{ request()->routeIs('rRegistro')?'text-danger fw-bold ' : 'text-dark' }}" href="{{ route('rRegistro') }}">{{__('Register')}}</a>
                </li>
            </ul>
        </div>
    </nav>



    @yield('content')

        
    

</body>


<footer class="text-center text-lg-start bg-body-tertiary text-muted mt-5">
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:

        <span>Biblioteca ASD</span>
    </div>
</footer>

</html>