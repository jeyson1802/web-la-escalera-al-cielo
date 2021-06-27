<?php

namespace App\Http\Livewire\Admin;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class VideosIndex extends Component
{   

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {   
        $query = Video::query();

        $query->where("name", 'LIKE', '%'. $this->search . '%');

        $videos = $query->latest('id')->paginate(8);
        
        return view('livewire.admin.videos-index', compact('videos'));
    }
}
