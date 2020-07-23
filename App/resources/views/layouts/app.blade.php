<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container-fluid overflow-auto p-0">


    <nav class="row justify-content-between navbar p-3 m-0 navbar-expand-lg navbar-light bg-dark">

        <div class="col">
            <a class="navbar-brand text-light" href="{{ url('/') }}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="col">
            <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li>

                </ul>
            </div>
        </div>


    </nav>
    

    <div class="row  justify-content-around m-0">

        <main class="col-sm-12 col-md-7 m-2 p-5">
            <div class="row">
                @yield('content')
                <span class="m-3"></span>
                @yield('content')
                <span class="m-3"></span>
                @yield('content')
            </div>
        </main>


        <aside class="col-sm-12 col-md-4 m-2 p-5">
            <div class="row justify-content-around">

                <div class="col -12card-group">
                
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                Te puede interesar...
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>

                  

                </div>

                @yield('aside_content')
            </div>
        </aside>

    </div>


    <footer class="row m-0">

        <div class="col-12 p-0 m-0">
            <div class="card text-center">

                <div class="card-body">
                    <h5 class="card-title display-5">Realizado con amor y ...</h5>
                    <p class="card-text"></p>
                    <br>
                    <i class="col-1 fab fa-2x fa-php"></i>
                    <i class="col-1 fab fa-2x fa-laravel"></i>
                    <i class="col-1 fab fa-2x fa-html5"></i>
                    <i class="col-1 fab fa-2x fa-css3-alt"></i>
                    <i class="col-1 fab fa-2x fa-js"></i>
                    <i class="col-1 fab fa-2x fa-bootstrap"></i>
                </div>
            </div>
        </div>

        
    </footer>

    
</body>
</html>
