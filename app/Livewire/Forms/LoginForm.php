<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule('required', message: 'Email is required')]
    #[Rule('email', message: 'This not a valid email')]
    public $email = '';

    #[Rule('required', message: 'Password is required')]
    public $password = '';

    public function store()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }
    }
}
