<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class MessageEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
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
        return $this->markdown('emails.confirmation')
        ->from($address = 'NoResponder@geodrill.biz', $name = "CTI APP")
        //->cc(['max.palli@crubher.com','cti@crubher.com','geannina.duran@crubher.com','cti.helpdesk@crubher.com'])
        ->cc('administradorcti@crubher.com')
        ->subject('SOLICITUD DE NUEVO INGRESO DE PERSONAL | ALTA DE USUARIO | TEST')
        ->with('datos', $this->datos);

    }
}
