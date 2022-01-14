<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUser extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    protected $listeners = ['delete'];

    protected $queryString = ['search'];
    // public $page = 1;
    // protected $queryString = ['search' => ['except' => ''],'page' => ['except' => 1, 'as' => 'p'],];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('danger', 'User deleted successfully .');
    }
    
    public function render()
    {
        $user = User::orderBy('id','desc')->where('name','like','%'.$this->search.'%')->paginate(10);
        return view('livewire.index-user',[
            "users" => $user
        ]);
    }
}
