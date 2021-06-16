<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use App\Models\Post;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request) {
        
        $data = $request->all();
        
        $query = Document::query();

        $query->where("status", 2);

        if($request->has('category_id')) {

            $category_id = $request->get('category_id');

            if(!is_null($category_id)) {
                $query->where('category_id','=',$category_id);
            }
            
        }
        
        if($request->has('month')) {

            $month = $request->get('month');

            if(!is_null($month)) {
                $query->whereMonth('date_public','=',$month);
            }
            
        }

        if($request->has('year')) {

            $year = $request->get('year');

            if(!is_null($year)) {
                $query->whereYear('date_public','=',$year);
            }
            
        }

        $documents = $query->latest('id')->paginate(8);

        $query_posts = Post::query();
        $query_posts->where("status", 2);

        $posts = $query_posts->latest('id')->take(3)->get();

        $categories = Category::all();

        return view('documents.index', compact('documents', 'categories', 'posts', 'data'));
    }
}
