<?php

namespace App\Http\Livewire\Admin;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class DocumentsIndex extends Component
{   

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {   
        $query = Document::query();

        $query->where("name", 'LIKE', '%'. $this->search . '%');

        $documents = $query->latest('id')->paginate(8);
        
        return view('livewire.admin.documents-index', compact('documents'));
    }
}
