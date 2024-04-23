<?php

namespace App\Livewire\Pages;

use App\Models\Job;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

class JobEdit extends Component
{
    #[Locked]
    public Job $job;

    public function mount(Job $job): void
    {
        $this->job = $job;
    }

    #[Title('Edit Job')]
    public function render()
    {
        return view('livewire.pages.job-edit');
    }
}
