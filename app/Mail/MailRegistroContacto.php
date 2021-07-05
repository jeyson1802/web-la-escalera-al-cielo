<?php

namespace App\Mail;

use App\Models\Contacto;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailRegistroContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contacto $contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contacto - Ministerio Arrepentimiento y Santidad')->view('mails.mailcontacto');
    }
}
