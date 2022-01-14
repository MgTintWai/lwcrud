<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Component
{
    public $name;
    public $email;
    public $password;

    public function submit(){
        
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' =>  'required'
        ]);
        
        $user = new User();
        $user->name = $this->name;
        $user->email =$this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        return redirect()->to('/');
    }
    
    public function render()
    {
        return view('livewire.create-user');
    }
}
