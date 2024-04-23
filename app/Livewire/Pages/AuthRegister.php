<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Component;


class AuthRegister extends Component
{
    public string $name;

    public string $email;

    public string $password;

    public string $password_confirmation;

    public function register()
    {
        // Validate
        $validated = $this->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', Password::default(), 'confirmed'],
        ]);

        // Create new user
        $user = User::create($validated);

        // Log in as user
        Auth::login($user);

        // Redirect
        return redirect()->to('/');
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.auth-register');
    }
}
