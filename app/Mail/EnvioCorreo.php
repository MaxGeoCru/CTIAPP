<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;


class EnvioCorreo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $datos)
    {
        $this->datos = $datos;
        Log::info($datos);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

       // Log::info($this->$datos);

     
        return $this->markdown('emails.correo')
        ->from($address = 'correo@test.com', $name = "Example")
        ->subject('Mensaje informativo')
        -with('datos'=> $this->datos);
       
       /* 
        return $this->view('emails.correo')
        ->with([
            'datos' => $this->datos
        ]);
        */


    }
}
