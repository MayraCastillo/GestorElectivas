<?php

namespace App\Http\Controllers;

use DB;
use App\Estudiante;
use App\Electiva;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\imports\EstudiantesImport;
use Maatwebsite\Excel\Facades\Excel;

class EstudianteController extends Controller
{

  public function mostrarEstudianteElectiva(){
    $data=DB::table('estudiante_electiva')
                    ->join('electivas','electivas.id','=','estudiante_electiva.idElectiva')
                    ->join('estudiantes','estudiantes.id','=','estudiante_electiva.idEstudiante')
                    ->select('electivas.nombre as nomElectiva','electivas.codigo', 'estudiantes.nomEstudiante','estudiantes.codEstudiante')
                    ->get();
    
   return view('cargar-estudiantes')->with('datos',$data);
  }

  public function guardarEstElectiva($codElectiva,$auxEst){
    $objeElectiva = Electiva::where('codigo',$codElectiva)->first();
    $data=DB::table('estudiante_electiva')->where([
                      ['idEstudiante', '=',$auxEst->id],
                      ['idElectiva', '=',$objeElectiva->id],
                  ])->first();
        if($data!=null){

        }else{
          $objeElectiva->estudiantes()->attach($auxEst);
        }

  }

  public function guardarEstudiantes($datos){
    //dd($datos);
    foreach ($datos as $est) {
      $aux = (array)$est;
      $codElectiva = $aux['codelectiva'];
      unset($aux['codelectiva']);
      //dd($aux);
      $auxEst = Estudiante::where('codEstudiante',$aux['codestudiante'])->first();

      if($auxEst == null){
        $auxEst = new Estudiante;
        $auxEst->codEstudiante = $aux['codestudiante'];
        $auxEst->identificacionEst = $aux['idestudiante'];
        $auxEst->nomEstudiante = $aux['nomestudiante'];
        $auxEst->api_token = '-';
        $auxEst->email = $aux['email'];
        $auxEst->save();
        $auxEst = Estudiante::where('codEstudiante',$aux['codestudiante'])->first();
        self::guardarEstElectiva($codElectiva,$auxEst);

        echo '<script language="javascript">alert("Datos agregados");</script>';
        //return view('enviar-correos');

      }else{
        self::guardarEstElectiva($codElectiva,$auxEst);
        continue;
      }

    }

    //return redirect()->route('gestion-estudiantes');
    //return view('cargar-estudiantes');

  }
  public function cargarExcel()
  {
    if(Input::hasFile('archivo')){
      $path = Input::file('archivo');
      $file_name = $path->getClientOriginalName();
      $path->move('files',$file_name);
      $arrayEstudent = Excel::toArray(new EstudiantesImport, 'files/'.$file_name)[0];
      foreach($arrayEstudent as $array){
        $auxArray = (array)$array;
        $info[] = array_filter($auxArray,function($var){
          return ($var != null);
        });
      }

      self::guardarEstudiantes(array_filter($info));
      
    }
  }

}
