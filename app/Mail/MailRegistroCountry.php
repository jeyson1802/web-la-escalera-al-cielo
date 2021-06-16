<?php

namespace App\Mail;

use App\Models\Country;
use App\Models\Person;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailRegistroCountry extends Mailable
{
    use Queueable, SerializesModels;

    public $person;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registro Correcto - Ministerio Arrepentimiento y Santidad')->view('mails.mailcountry');
    }
}
