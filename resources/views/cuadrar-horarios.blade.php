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

    <div class="navegador">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Estudiante</a></li>
            <li class="breadcrumb-item active" aria-current="page">Votación de horario</li>
        </ol>
                
    </div>


    <div class="informacion">

        <div class="menu" style="margin-left: 10px;">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <li class="nav-item">
                <p class="nav-link" href="#">Votación de horario</a>
            </li>
            
            </div>
        </div>

        <!--INICIO DEL CONTENIDO-->
        <div class="contenido">
            <div class="tab-content" id="v-pills-tabContent">
            <h2>Nombre de la electiva</h2>
			<hr />

                <div class="table-responsive">
                    <!--Table-->
                    <table class="table tblElectivas">              
                        <!--Table head-->
                        <thead >
                            <th class="tblElectivas" id="cab-tbl" colspan="8">HORARIO</th>
                                <tr id="cab-tbl">
                                <th class="tblElectivas">Dias</th>
                                <th class="tblElectivas">7:00-9:00</th>
                                <th class="tblElectivas">9:00-11:00</th>
                                <th class="tblElectivas">11:00-13:00</th>
                                <th class="tblElectivas">14:00-16:00</th>
                                <th class="tblElectivas">16:00-18:00</th>
                                <th class="tblElectivas">18:00-20:00</th>
                                </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td class="tblElectivas">Lunes</td>
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                            </tr>

                            <tr>
                                <td class="tblElectivas">Martes</td>
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                            </tr>

                            <tr>
                                <td class="tblElectivas">Miércoles</td>
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                            </tr>

                            <tr>
                                <td class="tblElectivas">Jueves</td>
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                            </tr>

                            <tr>
                                <td class="tblElectivas">Viernes</td>
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                            </tr>

                            <tr>
                                <td class="tblElectivas">Sábado</td>
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>  
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                                <td class="tblElectivas"><input type="checkbox"></td>
                            </tr>
                        </tbody>
                    <!--Table body-->                  
                    </table>
                    <!--Table-->                   
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-primary btnSubir">Enviar votación</button>
        <!--FIN DEL CONTENIDO-->

    </div>
      
    </div> 

    
    <div class="pieDePagina"></div>

</body>
</html>


