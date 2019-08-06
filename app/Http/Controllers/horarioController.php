<?php

namespace App\Http\Controllers;
use App\Estudiante;

use Illuminate\Http\Request;

class horarioController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index($token)
    {
        $est= new Estudiante();
        $estudiantes = Estudiante::get();

        foreach ($estudiantes as $item){
            if($item->api_token == $token){
                return view('cuadrar-horarios');
            }
        }
        return 'error de autenticacion';
    }
}
