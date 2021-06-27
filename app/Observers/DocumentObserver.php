<?php

namespace App\Observers;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class DocumentObserver
{
    /**
     * Handle the Document "created" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function creating(Document $document)
    {   
        if(! \App::runningInConsole()) {
            $document->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Document "updated" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function updating(Document $document)
    {
        $document->user_id = auth()->user()->id;
    }

    /**
     * Handle the Document "deleted" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function deleting(Document $document)
    {
        if($document->url_file) {
            Storage::delete($document->url_file);
        }
    }
    
}
