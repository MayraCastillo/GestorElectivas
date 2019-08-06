@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="info" style="margin-left: -130px;">
        <h2>Inicio</h2>
        <hr />
            <p>Bienvenido a la aplicación "Gestión de electivas", donde podrá llevar a cabo el proceso del ajuste
                de horarios de electivas de una manera novedosa, fácil y rápida.</p>
            <br>
            <p>Para dar inicio por favor seleccione la opción "Gestionar electivas",
                la cual se encuentra como primera opción en el menú ubicado a la izquierda.</p>
        </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
        </div>
    </div>
</div>
</div>
@endsection
