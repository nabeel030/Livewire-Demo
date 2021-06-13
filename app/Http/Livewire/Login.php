<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.login');
    }

    public function login() {
        dd('It worked');
    }
}
