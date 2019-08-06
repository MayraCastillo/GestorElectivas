@extends('layouts.app')

@section('content')

	<div class="contenedor">
		<div class="content">
			<h2>Datos de la electiva &raquo; Agregar datos</h2>
			<hr />
 
			<form class="form-horizontal" action="{{route('agregar-electiva')}}" method="post">
				@csrf
				<div class="form-group">
					<label class="col-sm-3 control-label">Código</label>
					<div class="txtBox">
						<input type="text" name="codigo" class="form-control" placeholder="Código" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="txtBox">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Profesor</label>
					<div class="txtBox">
						<input type="text" name="profesor" class="form-control" placeholder="Profesor" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Salas</label>
					<div class="txtBox">
					<input type="text" name="salas" class="form-control" placeholder="Salas" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cupos</label>
					<div class="txtBox">
						<input type="text" name="cupos" class="form-control" placeholder="Cupos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="txtBox">
						<select name="estado" class="form-control">
							<option value="1">Activa</option>
							<option value="0">Inactiva</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="txtBox">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="{{ route('lista-electivas') }}" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
