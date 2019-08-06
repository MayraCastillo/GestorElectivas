@extends('layouts.app')

@section('content')

<div class="contenedor">
	<div class="content">
        <h2>Enviar correos</h2>
        <hr />
        
        <form action="{{ route('enviar-correos') }}" method="post">
            @csrf
            @if($errors->any())
                    {{ $errors->first('subject') }}
            @endif
            <div>
                <label for="subject">Asunto:</label>
                <input name = 'subject' type="text" id="mail" />
            </div>
            @if($errors->any())
                    {{ $errors->first('content') }}
            @endif
            <div>
                <label for="msg">Message:</label>
                <textarea name = 'content' id="msg"></textarea>
            </div>
            <div class="button">
                <br>
                <input class="btnSubir btn btn-primary" type="submit" value="Enviar correo" />
            </div>
        </form>
    </div>
</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>  
 
@endsection