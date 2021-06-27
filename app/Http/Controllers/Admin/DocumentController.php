<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{   
    public function __construct(){
        $this->middleware("can:admin.documents.index")->only('index');
        $this->middleware("can:admin.documents.create")->only('create','store');
        $this->middleware("can:admin.documents.edit")->only('edit', 'update');
        $this->middleware("can:admin.documents.destroy")->only('destroy');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();

        return view('admin.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $categories = Category::pluck('name', 'id');

        return view('admin.documents.create', compact('categories'));
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
            'url_file' => 'required'
        ]);

        $document = Document::create([

            'name' => $request->name,
            'date_public' => $request->date_public,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);

        if($request->file('url_file')) {

            $url = Storage::put('documents', $request->file('url_file'));
            $document->update(['url_file' => $url]);
        }

        return redirect()->route('admin.documents.edit', $document)->with('info', 'El documento se creó con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Document $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {   

        $categories = Category::pluck('name', 'id');

        return view('admin.documents.edit', compact('document', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Document $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {           

        $request->validate([
            'name' => "required|unique:documents,name,$document->id"
        ]);

        $document->update([
            'name' => $request->name,            
            'date_public' => $request->date_public,            
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);

        if($request->file('url_file')) {

            $url = Storage::put('documents', $request->file('url_file'));

            if($document->url_file) {
                Storage::delete($document->url_file);
            }

            $document->update(['url_file' => $url]);                    
            
        }

        return redirect()->route('admin.documents.edit', $document)->with('info', 'El documento se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Document $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {   
        
        $document->delete();

        return redirect()->route('admin.documents.index')->with('info', 'El document se eliminó con éxito');
    }
}
