@extends('layouts.app')

@section('content')

  <div class="contenedor">
		<div class="content">
			<h2>Cargar aulas</h2>
      <hr />
      <div class="info">
        <br>

        <form enctype="multipart/form-data" action="{{route('cargar-aulas')}}" method="post">{{csrf_field()}}
          <input name="archivo" type="file" />
          <br>
          <input class="btnSubir btn btn-primary" type="submit" value="Subir archivo" />
        </form>
      </div>
      
      
      

      <br>
      <h2>Listado de aulas</h2>
      <hr/>
            <div class="table-responsive">
              <!--Table-->
                  <table class="table tblElectivas">              
                  <!--Table head-->
                      <thead>
                                <tr class="tblElectivas" id="cab-tbl">
                                  <th class="tblElectivas">Nombre Aula</th>
                                  <th class="tblElectivas">Capacidad</th>
                                  <th class="tblElectivas">7 - 9</th>
                                  <th class="tblElectivas">9 - 11</th>
                                  <th class="tblElectivas">11 - 1</th>
                                  <th class="tblElectivas">2 - 4</th>
                                  <th class="tblElectivas">4 - 6</th>
                                  <th class="tblElectivas">6 - 8</th>
                              </tr>
                      </thead>
                  <!--Table head-->                  
                  <!--Table body-->
                      <tbody>
                      @foreach ($datos as $dato)
                          <tr>
                            <td>{{$dato->nomAula}}</td>
                            <td>{{$dato->capacidad}}</td>
                            <td>{{$dato->hora7a9}}</td>
                            <td>{{$dato->hora9a11}}</td>
                            <td>{{$dato->hora11a1}}</td>
                            <td>{{$dato->hora2a4}}</td>
                            <td>{{$dato->hora4a6}}</td>
                            <td>{{$dato->hora6a8}}</td>
                          </tr>
                          @endforeach
                      </tbody>
                  <!--Table body-->                  
                  </table>
                  <!--Table-->                   
              </div>

			</div>

    </div>
  </div>


@endsection
  