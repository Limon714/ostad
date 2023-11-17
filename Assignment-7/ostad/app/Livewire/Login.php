<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Login extends Component
{
    #[Rule('required |email')]
    public string $email;
    #[Rule('required |min:8')]
    public string $password;
    
    public function signin(){
        $credentials = $this->validate();
        if(Auth::attempt($credentials)){
            session()->flash('success','You have Successfully logged in');
        }
        else{
            session()->flash('error','This information does not match our record.');
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
