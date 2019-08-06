<?php

namespace App\Http\Controllers;

use App\Electiva;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listaElectivas()
    {
        $electivas = Electiva::get();
        //echo json_encode($electivas);
        //$vje = json_encode($electivas);
        return view('lista-electivas',['var1'=>$electivas]);        
    } 
    
    public function agregarElectiva()
    {
        return view('agregar-electiva');        
    }  

    public function editarElectiva(Electiva $electiva)
    {
        return view('editar-electiva',['electiva'=>$electiva]);        
    } 

    public function eliminarElectiva()
    {
        return view('eliminar-electiva');        
    }     
}
