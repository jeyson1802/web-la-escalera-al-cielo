<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $categories = Category::pluck('name', 'id');

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:posts'
        ]);

        $post = Post::create([

            'name' => $request->name,
            'slug' => $request->slug,
            'date_public' => $request->date_public,
            'extract' => $request->extract,
            'body' => $request->body,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);

        if($request->file('url_image')) {

            $url = Storage::put('posts', $request->file('url_image'));
            $post->update(['url_image' => $url]);
        }

        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {   

        $this->authorize('author', $post);

        $categories = Category::pluck('name', 'id');

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {           

        $this->authorize('author', $post);

        $request->validate([
            'name' => "required|unique:posts,name,$post->id",
            'slug' => "required|unique:posts,slug,$post->id"
        ]);

        $post->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'date_public' => $request->date_public,
            'extract' => $request->extract,
            'body' => $request->body,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);

        if($request->file('url_image')) {

            $url = Storage::put('posts', $request->file('url_image'));

            if($post->url_image) {
                Storage::delete($post->url_image);
            }

            $post->update(['url_image' => $url]);
                    
            
        }

        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {   

        $this->authorize('author', $post);
        
        $post->delete();

        return redirect()->route('admin.posts.index')->with('info', 'El post se eliminó con éxito');
    }
}
