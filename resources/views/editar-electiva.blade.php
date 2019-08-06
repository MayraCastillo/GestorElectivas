@extends('layouts.app')

@section('content')
	
	<div class="contenedor">
		<div class="content">
			<h2>Datos de la electiva &raquo; Editar electiva {{ $electiva->nombre }}</h2>
			<hr />
			
			<form class="form-horizontal" method="post" action="{{route('Electivas.update',$electiva->codigo)}}" >
				@csrf
				<div class="form-group">
					<label class="col-sm-3 control-label">Código</label>
					<div class="col-sm-2">
						<input type="text" name="codigo" value="{{$electiva->codigo}}" class="form-control" placeholder="" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" value="{{$electiva->nombre}}" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Profesor</label>
					<div class="col-sm-4">
						<input type="text" name="profesor" value="{{$electiva->profesor}}" class="form-control" placeholder="Profesor" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Salas</label>
					<div class="col-sm-3">
					<input type="text" name="salas" value="{{$electiva->salas}}" class="form-control" placeholder="Salas" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cupos</label>
					<div class="col-sm-3">
						<input type="text" name="cupos" value="{{$electiva->cupos}}" class="form-control" placeholder="Cupos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-3">
						<select name="estado" class="form-control">
							<option value="1">Activa</option>
							<option value="2">Inactiva</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
					<input type="submit" name="add" class="btn btn-sm btn-primary" value="Actualizar datos">
						<a href="{{ route('lista-electivas') }}" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection