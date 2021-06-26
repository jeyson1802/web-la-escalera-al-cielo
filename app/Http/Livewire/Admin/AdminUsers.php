<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;
    
    public function render()
    {
        $users = User::where('name','LIKE', "%".$this->search."%")
        ->orWhere('email','LIKE', "%".$this->search."%")
        ->paginate(12);

        return view('livewire.admin.admin-users', compact('users'));
    }

    public function clearPage()
    {
        $this->reset('page');
    }

}
