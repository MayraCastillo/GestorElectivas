@extends('layouts.app')

@section('content')

	<div class="contenedor">
		<div class="content">
			<h2>Lista de electivas</h2>
			<hr />

			

			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th></th>
						<th>Código</th>
						<th>Nombre</th>
						<th>Profesor</th>
						<th>Salas</th>
						<th>Cupos</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					@foreach($var1 as $item)
					<tr>
					<td> <input type="checkbox"> </td>
					<td>{{$item['codigo']}}</td>
					<td>{{$item['nombre']}}</td>
					<td>{{$item['profesor']}}</td>
					<td>{{$item['salas']}}</td>
					<td>{{$item['cupos']}}</td>
                    <td>
                        <a href="{{ route('Electivas.edit',$item->codigo) }}" title="Editar electiva" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>
                        <a href = "{{ route('Electivas.destroy',$item->codigo) }}" title="Eliminar electiva" onclick="confirm('¿Está seguro de borrar la electiva? ')" 
                                class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
                    </td>
					</tr>
					@endforeach
				</tbody>
				
			</table>
			</div>
		</div>

</div>

<script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>


	</div>

@endsection