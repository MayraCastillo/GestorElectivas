<?php

namespace App\Http\Controllers;

use App\Electiva;
use Illuminate\Http\Request;

class ElectivaController extends Controller
{


    public function __construct()
    {
        //$this->middleware('auth');
        $this->codigoAux = 0;
    }


    public function index()
    {
        echo 'aqui el index';
        $electivas = Electiva::get();
        //echo json_encode($electivas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'aqui el create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $electiva = new Electiva();
        $electiva->codigo = $request->input('codigo');
        $electiva->nombre = $request->input('nombre');
        $electiva->profesor = $request->input('profesor');
        $electiva->salas = $request->input('salas');
        $electiva->cupos = $request->input('cupos');
        $electiva->estado = $request->input('estado');
        $electiva->save();
        echo '<script language="javascript">alert("Agregada");</script>';
        return view('agregar-electiva');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Electiva  $electiva
     * @return \Illuminate\Http\Response
     */
    public function show(Electiva $electiva)
    {
        //dd($codigo);
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Electiva  $electiva
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $electiva = new Electiva();
        $electiva = Electiva::where('codigo', $codigo)->first();
        //dd($electiva);
        $this->codigoAux = $electiva->codigo;
        //dd($this->codigoAux);
        return view('editar-electiva',['electiva'=>$electiva]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Electiva  $electiva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$codigo)
    {
        $electiva = new Electiva();
        $electiva = Electiva::where('codigo', $codigo)->delete();

        $electiva = new Electiva();
        $electiva->codigo = $request->input('codigo');
        $electiva->nombre = $request->input('nombre');
        $electiva->profesor = $request->input('profesor');
        $electiva->salas = $request->input('salas');
        $electiva->cupos = $request->input('cupos');
        $electiva->estado = $request->input('estado');
        $electiva->save();
        echo '<script language="javascript">alert("Actualizada");</script>';
        return redirect()->route('lista-electivas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Electiva  $electiva
     * @return \Illuminate\Http\Response
     */

     
    public function destroy($codigo)
    {        
        $electiva = new Electiva();
        $electiva = Electiva::where('codigo', $codigo)->delete();
        echo '<script language="javascript">alert("Eliminada");</script>';
        return redirect()->route('lista-electivas');        
    }

    
 
    public function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }
}
