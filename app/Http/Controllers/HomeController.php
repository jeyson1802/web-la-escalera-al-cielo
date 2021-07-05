<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
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

    public function quienessomos() {
        
        $query_posts = Post::query();
        $query_posts->where("status", 2);
        $posts = $query_posts->latest('id')->take(3)->get();

        return view('quienessomos', compact('posts'));
    }

    public function misionvision() {

        $query_posts = Post::query();
        $query_posts->where("status", 2);
        $posts = $query_posts->latest('id')->take(3)->get();

        return view('misionvision', compact('posts'));
    }

    public function organigrama() {

        $query_posts = Post::query();
        $query_posts->where("status", 2);
        $posts = $query_posts->latest('id')->take(3)->get();

        return view('organigrama', compact('posts'));
    }

    public function preguntasfrecuentes() {

        $query_posts = Post::query();
        $query_posts->where("status", 2);
        $posts = $query_posts->latest('id')->take(3)->get();

        return view('preguntasfrecuentes', compact('posts'));
    }

}
