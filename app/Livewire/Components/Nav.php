<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Nav extends Component
{
    public bool $is_hidden_dropdown = true;

    public function toggle_profile_dropdown(): void
    {
    }

    public function render()
    {
        return view('livewire.components.nav');
    }
}
