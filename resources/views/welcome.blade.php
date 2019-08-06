<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestor Electivas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            html, body {
                background-image: url("electivas/background.png");
                background-size: 100vw 100vh;
                background-attachment:fixed;
                color: #FFFFFF;
                font-family: 'Varela Round', sans-serif;
                 margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h1{
                font-size: 70px;
                font-weight: 1;
            }

            h2{
                font-size: 25px;  
            }
            

            @media(min-width: 1024px){
                html, body{background-image: url("electivas/fondoPrincipal.jpg");}
                .links > a {font-size: 20px;}
                h1{font-size: 80px;}
                h2{font-size: 40px;}
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="mx-auto text-center">
                <h1>Gestor de Electivas</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Práctica, fácil, novedosa y rápida. <br>
                                                            La mejor forma de inscribir tus electivas.</h2>
                <button type="button" class="btn btn-danger"><a href="{{ route('login') }}" style="color: #FFFFFF; padding: 30px;">Comenzar</a></button>
                
        </div>

            </div>
        </div>
    </body>
</html>
