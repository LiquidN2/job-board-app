<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public string $heading = '';

    public function render()
    {
        return view('livewire.components.header');
    }
}
