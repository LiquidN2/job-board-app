<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AuthLogin extends Component
{
    public string $email;

    public string $password;

    public function signin()
    {
        // Validate
        $validated = $this->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt Signin
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email'    => __('auth.failed'),
                'password' => __('auth.failed'),
            ]);
        }

        // Re-gen session
        request()->session()->regenerate();

        // Redirect
        return redirect()->to('/');
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.auth-login');
    }
}
