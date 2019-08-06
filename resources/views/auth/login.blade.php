<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GestorElectivas</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('../css/inicio.css') }}" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
    body{
      background-image: url("electivas/backgroundIR.png");
      background-size: 100vw 100vh;
      background-attachment:fixed;
      margin: 0;
    }
    p{
    	margin-top: -5px;
    }
    #login{
    	width: 280px;
    	height: 268px;
    }

    .login {

      width: 370px;
      height: 354px;
      background-image: url("/electivas/back-login.png");
      display: flex;
      align-items: center;
      margin: auto;
      margin-top: 100px;
    }

    .form-group
    {
    	height: 15px;
    	margin-bottom: 25px;
    }

    .form{
      width: 180px;
      height: 200px;
      margin-top: -75px;
      line-height: 50%;
      text-align: center;
      margin-left: 100px;
      color: #32497B;
    }

    #userName {
    	background: url("electivas/ico-usuario.png") no-repeat;
    }
    	.passwordClass {
    		/*background: url("ico-pass.png") no-repeat !important;*/
        margin-bottom: 1rem;
        height: auto;

    	}

    .login-button {
    	border: none;
    	background: url("electivas/login-button.png") no-repeat;
    	width: 100px;
    	height: 36px;
    	margin: 0 auto 10px;
    	display: block;
    	color: #FFFFFF;
    	font-size: 15px;
    }

    .register-button {
    	border: none;
    	background: url("electivas/register-button.png") no-repeat;
      width: 100%;
    	height: 37px;
    	margin: 0 auto 10px;
    	margin-top: -5px;
    	display: block;
    	color: #ffffff;
    	font-size: 15px;
    	/*box-shadow: none !important;*/
    }

    .botonIngresarClass:active
    {
    	background-position: 0 1px !important;
    }

    div.campo {
        position: relative;
    }

    div.error {
        height: 31px;
        width: 145px;
        padding-left: 15px;
        position: absolute;
    }

    .container{
      margin-left: 120px;
    }

    #idIniciarSesion{
      margin-top: 20px;
    }

    @media(min-width: 1024px){

      body{
        background-image: url("electivas/fondoIniciarSesion.png");
      }

      .container{
        margin-left: 20px;
      }

      #idIniciarSesion{
        margin-top: 0px;
      }

      .login {
      background: url("electivas/back-login.png") no-repeat;
      margin-top: 150px;
      height: 400px;
      width: 470px;
      margin-left: 450px;
      margin-right: 400px;
      color: white;
      border-radius: 15px;
      position: center;

      }
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
        line-height: 50%;
        margin-left: 15px;
        line-height: 50%;

    }
  </style>

</head>
<body>

  <!--<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Inicio de Sesión') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Ingresar') }}
                                  </button>

                                  @if (Route::has('password.request'))
                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                          {{ __('¿Olvidaste tu contraseña?') }}
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>-->

  <section id="login">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-12 col-md-12 ">
            <div class="login">
              <div class="form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <p id="idIniciarSesion">Iniciar Sesión</p>
                  <div class="form-group">
                    <input id="email" type="email" aria-describedby="emailHelp" placeholder="Correo Electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror

                  </div>
                  <div class="form-group">
                    <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>
                  <button type="submit" class="btn btn-primary login-button">Ingresar</button>
                <!--  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('¿Olvidaste tu contraseña?') }}
                      </a>
                  @endif-->

                </form>
                <p>___________ o __________</p>
                <p>Crear una nueva cuenta</p>

                @if (Route::has('register'))

                  <input type ='button' class="btn btn-danger register-button"  value = 'Registrarse' onclick="location.href = '{{ route('register') }}'"/>

                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <footer>
      <div class="company-logo"></div>
      <div class="company-info">
        <p>2019 - Panteras Sagaces.</p>
        <p>Todos los derechos reservados.</p>
      </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
