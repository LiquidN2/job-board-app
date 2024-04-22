<?php

namespace App\Livewire\Pages;

use App\Models\Job;
use Livewire\Attributes\Title;
use Livewire\Component;

class Jobs extends Component
{
    #[Title('Jobs')]
    public function render()
    {
        return view('livewire.pages.jobs')->with([
            'jobs' => Job::with(['employer'])->latest()->paginate(10)
        ]);
    }
}
