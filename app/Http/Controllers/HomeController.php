<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $countries = Country::all();

        return view('home', compact('countries'));
    }
    
    public function autocomplete(Request $request) {
        
        $search_text = $request->get('country');

        $countries_data = Country::where('name', 'LIKE', '%'. $search_text. '%')->get();

        return response()->json($countries_data);
    }
}
