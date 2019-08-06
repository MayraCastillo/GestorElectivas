<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mensaje extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;
    public $subject;
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos,$nombre,$token)
    {
        $this->datos = $datos;
        $this->datos['name'] = $nombre;
        $this->subject = $datos['subject'];
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.messageReceived');
    }
}
