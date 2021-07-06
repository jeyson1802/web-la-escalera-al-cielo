<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{   
    public function __construct(){
        $this->middleware("can:admin.videos.index")->only('index');
        $this->middleware("can:admin.videos.create")->only('create','store');
        $this->middleware("can:admin.videos.edit")->only('edit', 'update');
        $this->middleware("can:admin.videos.destroy")->only('destroy');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();

        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $categories = Category::pluck('name', 'id');

        return view('admin.videos.create', compact('categories'));
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
            'name' => 'required'
        ]);

        $url_video = $request->url_video;

        $url_video_array = explode("/", $url_video);

        if(Str::contains($url_video, 'youtube')) {
            $url_video_id = $url_video_array[4];
            $url_thumbail = 'https://img.youtube.com/vi/'.$url_video_id.'/0.jpg';
        } 

        if(Str::contains($url_video, 'vimeo')) {
            $url_video_id = $url_video_array[4];
            $hash = unserialize(file_get_contents("https://vimeo.com/api/v2/video/".$url_video_id.".php"));
            $url_thumbail_preview = $hash[0]['thumbnail_large'];
            $url_thumbail = substr_replace( $url_thumbail_preview, "480x360", -3);
        } 

        $video = Video::create([

            'name' => $request->name,
            'date_public' => $request->date_public,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'url_video' => $url_video,
            'url_thumbail' => $url_thumbail
        ]);

        return redirect()->route('admin.videos.edit', $video)->with('info', 'El video se creó con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Video $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {   

        $categories = Category::pluck('name', 'id');

        return view('admin.videos.edit', compact('video', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Video $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {           

        $request->validate([
            'name' => "required|unique:videos,name,$video->id"
        ]);

        $url_video = $request->url_video;

        $url_video_array = explode("/", $url_video);
        
        if(Str::contains($url_video, 'youtube')) {
            $url_video_id = $url_video_array[4];
            $url_thumbail = 'https://img.youtube.com/vi/'.$url_video_id.'/0.jpg';
        } 

        if(Str::contains($url_video, 'vimeo')) {
            $url_video_id = $url_video_array[4];
            $hash = unserialize(file_get_contents("https://vimeo.com/api/v2/video/".$url_video_id.".php"));
            $url_thumbail_preview = $hash[0]['thumbnail_large'];
            $url_thumbail = substr_replace( $url_thumbail_preview, "480x360", -3);
        } 

        $video->update([
            'name' => $request->name,            
            'date_public' => $request->date_public,            
            'status' => $request->status,
            'category_id' => $request->category_id,
            'url_video' => $url_video,
            'url_thumbail' => $url_thumbail
        ]);

        return redirect()->route('admin.videos.edit', $video)->with('info', 'El video se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Video $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {   
        
        $video->delete();

        return redirect()->route('admin.videos.index')->with('info', 'El video se eliminó con éxito');
    }
}
