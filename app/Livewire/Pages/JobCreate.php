<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class JobCreate extends Component
{
    #[Title('Create Job')]
    public function render()
    {
        return view('livewire.pages.job-create');
    }
}
