<?php

namespace App\Http\Controllers;

use App\Mail\MailRegistroCountry;
use App\Mail\MailRegistroPerson;
use App\Models\Country;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PersonController extends Controller
{
    public function show(Country $country) {
        
        return view('person', compact('country'));
    }

    public function store(Request $request) {
        
        $person = Person::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
            'answer' => $request->answer,
            'date_birth' => Carbon::createFromFormat('d/m/Y', $request->date_birth)->format('Y-m-d'),
            'country_id' => $request->country_id
        ]);

        $country = Country::find($request->country_id);
        
        Mail::to($person->email)->send(new MailRegistroPerson($person));

        Mail::to($country->email)->send(new MailRegistroCountry($person));

        return view('personexito', compact('country'));
    }
}
