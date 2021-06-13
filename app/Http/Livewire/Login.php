<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function render()
    {
        return view('livewire.login');
    }

    public function login() {

        $this->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

        $creds = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if(Auth::attempt($creds))
            return redirect()->route('home');

        return redirect()->back();

    }
}
