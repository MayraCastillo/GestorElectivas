@extends('layouts.app')

@section('content')

  <div class="contenedor">
		<div class="content">
			<h2>Cargar estudiantes</h2>
      <hr />
      <div class="info">
        <br>

        <form enctype="multipart/form-data" action="{{route('cargar-estudiantes')}}" method="post">{{csrf_field()}}
          <input name="archivo" type="file" />
          <br>
          <input class="btnSubir btn btn-primary" type="submit" value="Subir archivo" />
        </form>
      </div>
      
      
      

      <br>
      <h2>Listado de estudiantes</h2>
      <hr/>
            <div class="table-responsive">
              <!--Table-->
                  <table class="table tblElectivas">              
                  <!--Table head-->
                      <thead>
                                <tr class="tblElectivas" id="cab-tbl">
                                  <th class="tblElectivas">Nombre Electiva</th>
                                  <th class="tblElectivas">Código Electiva</th>
                                  <th class="tblElectivas">Nombre Estudiante</th>
                                  <th class="tblElectivas">Código Estudiante</th>
                              </tr>
                      </thead>
                  <!--Table head-->                  
                  <!--Table body-->
                      <tbody>
                      @foreach ($datos as $dato)
                          <tr>
                          
                              <td class="tblElectivas">{{$dato->nomElectiva}}</td>
                              <td class="tblElectivas">{{$dato->codigo}}</td>  
                              <td class="tblElectivas">{{$dato->nomEstudiante}}</td>  
                              <td class="tblElectivas">{{$dato->codEstudiante}}</td>
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
