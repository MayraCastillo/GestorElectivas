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
						<th>Nombre Aula</th>
            <th>Capacidad</th>
            <th>7 - 9</th>
            <th>9 - 11</th>
            <th>11 - 1</th>
            <th>2 - 4</th>
            <th>4 - 6</th>
            <th>6 - 8</th>
					</tr>
				</thead>

				<tbody>
					@foreach($var1 as $dato)
					<tr>
					<td> <input type="checkbox"> </td>
					<td>
          {{$dato->nomAula}}
        </td>
        <td>
          {{$dato->capacidad}}
        </td>
        <td>
          {{$dato->hora7a9}}
        </td>
        <td>
          {{$dato->hora9a11}}
        </td>
        <td>
          {{$dato->hora11a1}}
        </td>
        <td>
          {{$dato->hora2a4}}
        </td>
        <td>
          {{$dato->hora4a6}}
        </td>
        <td>
          {{$dato->hora6a8}}
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
