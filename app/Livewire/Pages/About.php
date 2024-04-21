<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class About extends Component
{
    #[Title('About')]
    public function render()
    {
        return view('livewire.pages.about');
    }
}
