<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <style>
    html
    {
        background-size: cover;
        background-color: transparent;
    }

    body
    {
        background-image:url(electivas/backgroundIR.png);
        background-size: 100vw;
        background-attachment:fixed;
    }

    .form .contenedor
    {
        height: 300px;
        width: 350px;
        margin: auto;
        margin-top: 20%;
        background-color: rgba(255, 255, 255, 0.555);
        color: white;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
    }

    .form #p1
    {
        color: black;
        font-weight: bold;
        font-size: 20px;
    }

    .form #lbl
    {
        color: black;
        font-size: medium;
        font-weight: normal;
    }

    .form .contenedor #lblPass
    {
        color: black;
        font-size: medium;
        font-weight: normal;
    }

    .form .contenedor #lblNom
    {
        color: black;
        font-size: medium;
        font-weight: normal;
    }
    .form .contenedor #lblApe
    {
        color: black;
        font-size: medium;
        font-weight: normal;
    }

    .form .contenedor #lblCP
    {
        color: black;
        font-size: medium;
        font-weight: normal;
    }
    .form .contenedor #password-confirm #name #email #password
    {
        font-size: medium;
        font-weight: normal;
        width: 250px;
        border-radius: 5px;
    }


    .botones
    {
        text-align: center;
        padding: 20px;
    }
    .register-button {
    	border: none;
    	background: url("electivas/login-button.png") no-repeat;
        width: 100px;
    	height: 37px;
    	display: block;
    	color: #FFFFFF;
        font-size: 15px;
        float: left;
        margin-left: 50px;
        margin-right: 10px;
    }
    .cancel-button {
    	border: none;
    	background: url("electivas/register-button.png") no-repeat;
        width: 30%;
    	height: 37px;
    	display: block;
    	color: #ffffff;
        font-size: 15px;
    	/*box-shadow: none !important;*/
    }
    footer{
      width: 100%;
      height: 71px;

      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      bottom: 0;

    }


    .company-logo{
        width: 60px;
        height: 60px;
        background: url("electivas/company-logo.png");
        background-size: 60px;
        background-repeat: no-repeat;
        line-height: 50%;

    }

    .company-info{
        height: 35px;
        color: #FFFFFF;
        margin-left: 15px;
        line-height: 30%;
        margin-top: -20px;
    }

    @media(min-width: 1024px){
        body{background-image:url(electivas/fondoRegistrarse.png); background-size: 100vw 100vh;}
        .form .contenedor{margin-top: 12%;}
    }

    </style>
</head>
<body>
    <div class="form">

        <div class="contenedor">

            <p id="p1">Crear nuevo usuario</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">


                    <div class="col-md-6">
                        <p id="lblNom">Nombre:<input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></p>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">

                        <p id="lbl">Correo electrónico:<input id="email" placeholder="Correo" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></p>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                        <p id="lblPass">Contraseña: <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"></p>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                      <p id="lblCP">Confirme contraseña:<input id="password-confirm" placeholder="Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"></p>
                    </div>
                </div>
                <div class="botones">
                  <button type="submit" class="btn btn-danger register-button">Registrarse</button>
                  <button type="submit" class="btn btn-danger cancel-button"><a href="{{ url('/') }}" style="color: #FFFFFF; text-decoration: none;">Cancelar</a></button>
                </div>

            </form>


            <!-- Button (Double) -->

        </div>
    </div>

    <footer>
        <div class="company-logo"></div>
        <div class="company-info">
          <p>2019 - Panteras Sagaces.</p>
          <p>Todos los derechos reservados.</p>
        </div>
      </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
