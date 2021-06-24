<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{   

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {   
        $query = Post::query();

        $query->where("status", 2);

        $query->where("name", 'LIKE', '%'. $this->search . '%');

        $posts = $query->latest('id')->paginate(8);
        
        return view('livewire.admin.posts-index', compact('posts'));
    }
}
