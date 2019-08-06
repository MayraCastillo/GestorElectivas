<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Mensaje;
use App\Estudiante;
use Session;
use Redirect;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('enviar-correos');
    }

    public function store(Request $request)
    {
        
        $datos = request()->validate(
            [
                'subject' => 'required',
                'content' => 'required'
            ]);

        $est = Estudiante::get();

        //renovamos los tokens
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        foreach ($est as $item){
            $item->api_token = $this->generate_string($permitted_chars,20);
            $item->save();
        }

        //Envio de correos masivos
        for ($i=0; $i<count($est); $i++) {
            Mail::to($est[$i]->email)->queue(new Mensaje($datos,$est[$i]->nomEstudiante,$est[$i]->api_token));
        }

        return 'mensaje enviado';
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
