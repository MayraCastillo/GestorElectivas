@extends('layouts.app')

@section('content')

	<div class="contenedor">
		<div class="content">
        <h2>Disponibilidad de aulas</h2>
        <hr />

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="lunes-tab" data-toggle="tab" href="#lunes" role="tab" aria-controls="lunes" aria-selected="true">Lunes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="martes-tab" data-toggle="tab" href="#martes" role="tab" aria-controls="martes" aria-selected="false">Martes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="miercoles-tab" data-toggle="tab" href="#miercoles" role="tab" aria-controls="miercoles" aria-selected="false">Miércoles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="jueves-tab" data-toggle="tab" href="#jueves" role="tab" aria-controls="jueves" aria-selected="false">Jueves</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="viernes-tab" data-toggle="tab" href="#viernes" role="tab" aria-controls="viernes" aria-selected="false">Viernes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sabado-tab" data-toggle="tab" href="#sabado" role="tab" aria-controls="sabado" aria-selected="false">Sábado</a>
          </li>
        </ul>
 
        <div class="tab-content">
		<!--INICIO LUNES-->
        <div class="tab-pane active" id="lunes" role="tabpanel" aria-labelledby="lunes-tab">
            <br>
            <div class="table-responsive">
              <!--Table-->
                  <table class="table tblElectivas">              
                  <!--Table head-->
                      <thead>
                          <th class="tblElectivas" id="cab-tbl" colspan="8">Lunes</th>
                                <tr class="tblElectivas" id="cab-tbl">
                                  <th class="tblElectivas">Salón/Sala</th>
                                  <th class="tblElectivas">7:00-9:00</th>
                                  <th class="tblElectivas">9:00-11:00</th>
                                  <th class="tblElectivas">11:00-13:00</th>
                                  <th class="tblElectivas">14:00-16:00</th>
                                  <th class="tblElectivas">16:00-18:00</th>
                                  <th class="tblElectivas">18:00-20:00</th>
                              </tr>
                      </thead>
                  <!--Table head-->                  
                  <!--Table body-->
                      <tbody>
                          <tr>
                              <td class="tblElectivas">Salón 234</td>
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
      <!--FIN LUNES-->


      <!--INICIO MARTES-->
      <div class="tab-pane" id="martes" role="tabpanel" aria-labelledby="martes-tab">
          <br>
          <div class="table-responsive">
            <!--Table-->
                <table class="table tblElectivas">              
                <!--Table head-->
                    <thead >
                        <th class="tblElectivas" id="cab-tbl" colspan="8">Martes</th>
                              <tr class="tblElectivas" id="cab-tbl">
                                <th class="tblElectivas">Salón/Sala</th>
                                <th class="tblElectivas">7:00-9:00</th>
                                <th class="tblElectivas">9:00-11:00</th>
                                <th class="tblElectivas">11:00-13:00</th>
                                <th class="tblElectivas">14:00-16:00</th>
                                <th class="tblElectivas">16:00-18:00</th>
                                <th class="tblElectivas">18:00-20:00</th>
                            </tr>
                    </thead>
                <!--Table head-->                  
                <!--Table body-->
                    <tbody>
                        <tr>
                            <td class="tblElectivas">Salón 234</td>
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
      <!--FIN MARTES-->


      <!--INICIO MIERCOLES-->
      <div class="tab-pane" id="miercoles" role="tabpanel" aria-labelledby="miercoles-tab">
          <br>
          <div class="table-responsive">
            <!--Table-->
                <table class="table tblElectivas">              
                <!--Table head-->
                    <thead >
                        <th class="tblElectivas" id="cab-tbl" colspan="8">Miércoles</th>
                              <tr class="tblElectivas" id="cab-tbl">
                                <th class="tblElectivas">Salón/Sala</th>
                                <th class="tblElectivas">7:00-9:00</th>
                                <th class="tblElectivas">9:00-11:00</th>
                                <th class="tblElectivas">11:00-13:00</th>
                                <th class="tblElectivas">14:00-16:00</th>
                                <th class="tblElectivas">16:00-18:00</th>
                                <th class="tblElectivas">18:00-20:00</th>
                            </tr>
                    </thead>
                <!--Table head-->                  
                <!--Table body-->
                    <tbody>
                        <tr>
                            <td class="tblElectivas">Salón 234</td>
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
      <!--FIN MIERCOLES-->


      <!--INICIO JUEVES-->
      <div class="tab-pane" id="jueves" role="tabpanel" aria-labelledby="jueves-tab">
          <br>
          <div class="table-responsive">
            <!--Table-->
                <table class="table tblElectivas">              
                <!--Table head-->
                    <thead >
                        <th class="tblElectivas" id="cab-tbl" colspan="8">Jueves</th>
                              <tr class="tblElectivas" id="cab-tbl">
                                <th class="tblElectivas">Salón/Sala</th>
                                <th class="tblElectivas">7:00-9:00</th>
                                <th class="tblElectivas">9:00-11:00</th>
                                <th class="tblElectivas">11:00-13:00</th>
                                <th class="tblElectivas">14:00-16:00</th>
                                <th class="tblElectivas">16:00-18:00</th>
                                <th class="tblElectivas">18:00-20:00</th>
                            </tr>
                    </thead>
                <!--Table head-->                  
                <!--Table body-->
                    <tbody>
                        <tr>
                            <td class="tblElectivas">Salón 234</td>
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
      <!--FIN JUEVES-->



      <!--INICIO VIERNES-->
      <div class="tab-pane" id="viernes" role="tabpanel" aria-labelledby="viernes-tab">
          <br>
          <div class="table-responsive">
            <!--Table-->
                <table class="table tblElectivas">              
                <!--Table head-->
                    <thead >
                        <th class="tblElectivas" id="cab-tbl" colspan="8">Viernes</th>
                              <tr class="tblElectivas" id="cab-tbl">
                                <th class="tblElectivas">Salón/Sala</th>
                                <th class="tblElectivas">7:00-9:00</th>
                                <th class="tblElectivas">9:00-11:00</th>
                                <th class="tblElectivas">11:00-13:00</th>
                                <th class="tblElectivas">14:00-16:00</th>
                                <th class="tblElectivas">16:00-18:00</th>
                                <th class="tblElectivas">18:00-20:00</th>
                            </tr>
                    </thead>
                <!--Table head-->                  
                <!--Table body-->
                    <tbody>
                        <tr>
                            <td class="tblElectivas">Salón 234</td>
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
      <!--FIN VIERNES-->



      <!--INICIO SABADO-->
      <div class="tab-pane" id="sabado" role="tabpanel" aria-labelledby="sabado-tab">
          <br>
          <div class="table-responsive">
            <!--Table-->
                <table class="table tblElectivas">              
                <!--Table head-->
                    <thead >
                        <th class="tblElectivas" id="cab-tbl" colspan="8">Sábado</th>
                              <tr class="tblElectivas" id="cab-tbl">
                                <th class="tblElectivas">Salón/Sala</th>
                                <th class="tblElectivas">7:00-9:00</th>
                                <th class="tblElectivas">9:00-11:00</th>
                                <th class="tblElectivas">11:00-13:00</th>
                                <th class="tblElectivas">14:00-16:00</th>
                                <th class="tblElectivas">16:00-18:00</th>
                                <th class="tblElectivas">18:00-20:00</th>
                            </tr>
                    </thead>
                <!--Table head-->                  
                <!--Table body-->
                    <tbody>
                        <tr>
                            <td class="tblElectivas">Salón 234</td>
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
      <!--FIN SABADO-->

    </div>
    </div>
</div>
</div>

@endsection
