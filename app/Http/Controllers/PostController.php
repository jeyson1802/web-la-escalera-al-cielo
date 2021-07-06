<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {
        
        $data = $request->all();
        
        $query = Post::query();

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

        $posts =$query->latest('date_public')->paginate(6);

        $categories = Category::all();

        return view('posts.index', compact('posts', 'categories', 'data'));
    }

    public function show(Post $post) {

        $this->authorize('published', $post);

        $query_posts = Post::query();
        $query_posts->where("status", 2);
        $posts = $query_posts->latest('date_public')->take(3)->get();

        $query_documents = Document::query();
        $query_documents->where("status", 2);
        $documents = $query_documents->latest('date_public')->take(4)->get();

        return view('posts.show', compact('post', 'posts', 'documents'));
    }
}
