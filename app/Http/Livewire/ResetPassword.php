<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    public $password;
    public $password_confirmation;

    protected $rules = [
        'password' => 'required|min:6|confirmed',
    ];

    public function resetPassword()
    {
        $this->validate();

        $user = Auth::user();
        $user->password = Hash::make($this->password);
        $user->is_password_reset_required = false;
        $user->save();

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.reset-password');
    }
}
