<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ButtonLogout extends Component
{
    public function logout()
    {
        Auth::logout();

        return redirect()->to('login');
    }

    public function render()
    {
        return view('livewire.components.button-logout');
    }
}
