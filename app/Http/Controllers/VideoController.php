<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request) {
        
        $data = $request->all();
        
        $query = Video::query();

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

        $videos = $query->latest('date_public')->paginate(9);

        $query_posts = Post::query();
        $query_posts->where("status", 2);

        $posts = $query_posts->latest('date_public')->take(3)->get();

        $categories = Category::all();

        return view('videos.index', compact('videos', 'categories', 'posts', 'data'));
    }
}
