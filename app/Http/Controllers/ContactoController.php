<?php

namespace App\Http\Controllers;

use App\Mail\MailRegistroContacto;
use App\Models\Contacto;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function show() {
        
        //Perú
        $country = Country::find(1);

        return view('contacto', compact('country'));
    }

    public function store(Request $request) {
        
        $contacto= new Contacto();

        $contacto->name = $request->name;
        $contacto->lastname = $request->lastname;
        $contacto->email = $request->email;
        $contacto->phone = $request->phone;
        $contacto->message = $request->message;
        
        Mail::to('info@minpaes.org')->send(new MailRegistroContacto($contacto));

        //Perú
        $country = Country::find(1);

        return view('contactoexito', compact('country'));
    }
}
