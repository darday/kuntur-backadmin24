<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name; // Hacemos pública la variable $name para que esté disponible en la vista

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name; // Asignamos el valor de $name a la propiedad de la clase
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.default') // Aseguramos que la vista sea 'emails.default'
                    ->subject('Bienvenido al Kunturñawi'); // Añadimos el asunto del correo
    }
}
