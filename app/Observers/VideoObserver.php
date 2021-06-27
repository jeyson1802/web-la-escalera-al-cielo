<?php

namespace App\Observers;

use App\Models\Video;

class VideoObserver
{
    /**
     * Handle the Video "created" event.
     *
     * @param  \App\Models\Video  $video
     * @return void
     */
    public function creating(Video $video)
    {   
        if(! \App::runningInConsole()) {
            $video->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Video "updated" event.
     *
     * @param  \App\Models\Video  $video
     * @return void
     */
    public function updating(Video $video)
    {
        $video->user_id = auth()->user()->id;
    }


}
