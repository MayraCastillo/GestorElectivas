<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" media="only screen and (max-width: 768px)" href="estilos.css">
    
    <script>tinymce.init({selector:'textarea'});</script>
    

    <!-- Fonts -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style_nav.css') }}" rel="stylesheet">
    
   
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->


    
    
</head>
<body>

    <div class="encabezado"></div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Universidad del Cauca
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
                    </ul>
                </div>
            </div>
            
        </nav>
        
      
    </div> 

    <div class="navegador">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Secretaria</a></li>
            <li class="breadcrumb-item"><a href="#">Gestión de electivas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar electiva</li>
        </ol>

        <div class="cerrarSesion"></div>
                
    </div>


    <div class="informacion">

        <div class="menu">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestionar electivas</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('lista-electivas') }}">Lista de electivas</a>
                <a class="dropdown-item" href="{{ route('agregar-electiva') }}">Agregar electiva</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('disponibilidad-aulas') }}">Disponibilidad de aulas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('cargar-estudiantes') }}">Cargar estudiantes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('enviar-correos') }}">Enviar correos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cargar-aulas') }}">Cargar aulas</a>
            </li>

            </div>
        </div>

        <!--INICIO DEL CONTENIDO-->
        <div class="contenido">
            <div class="tab-content" id="v-pills-tabContent">
            @yield('content')
            </div>
        <!--FIN DEL CONTENIDO-->

    </div>



    
    
    
    <div class="pieDePagina"></div>

</body>
</html>
