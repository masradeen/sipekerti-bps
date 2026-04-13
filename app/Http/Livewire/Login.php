<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $credentials = ['email' => $this->email, 'password' => $this->password];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_password_reset_required) {
                return redirect()->route('password.resets');
            }
            return redirect()->route('dashboard');
        }

        session()->flash('error', 'Invalid credentials');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
