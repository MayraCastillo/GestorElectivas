<?php

namespace App\Http\Controllers;

use DB;
use App\Aula;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\AulasImport;
use Maatwebsite\Excel\Facades\Excel;

class AulaController extends Controller
{
  public function mostrarAulas(){
    $data=DB::table('aula')->get();
    //dd($data);
   return view('listar-aulas')->with('datos',$data);
  }

  public function guardarAulas($datos){
    //dd($datos);
    foreach ($datos as $aula) {
      $aux = (array)$aula;
      //dd($aux['nomaula']);
      $auxAula = Aula::where('nomAula',$aux['nomaula'])->first();

      if($auxAula == null){
        $auxAula = new Aula;
        $auxAula->nomAula = $aux['nomaula'];
        $auxAula->capacidad = $aux['capacidad'];
        $auxAula->hora7a9 = $aux['hora7a9'];
        $auxAula->hora9a11 = $aux['hora9a11'];
        $auxAula->hora2a4 = $aux['hora2a4'];
        $auxAula->hora11a1 = $aux['hora11a1'];
        $auxAula->hora4a6 = $aux['hora4a6'];
        $auxAula->hora6a8 = $aux['hora6a8'];
        $auxAula->save();
      }else{
        continue;
      }

    }

  }
  public function cargarExcel()
  {
    if(Input::hasFile('archivo')){
      $path = Input::file('archivo');
      $file_name = $path->getClientOriginalName();
      $path->move('files',$file_name);
      $arrayAulas = Excel::toArray(new AulasImport, 'files/'.$file_name)[0];
      foreach($arrayAulas as $array){
        $auxArray = (array)$array;
        $info[] = array_filter($auxArray,function($var){
          return ($var != null);
        });
      }

      self::guardarAulas(array_filter($info));
      return redirect()->route('listar-aulas');
    }
  }
}
