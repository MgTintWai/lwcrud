<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditUser extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;

    public function mount(User $user){
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function submit(){

        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->password = $this->password ? Hash::make($this->password) : $this->user->password;
        $this->user->update();

        session()->flash('message', 'User successfully updated.');

        return redirect()->to('/');
    }
    
    public function render()
    {
        return view('livewire.edit-user',[
            'users'=>$this->user
        ]);
    }
}
