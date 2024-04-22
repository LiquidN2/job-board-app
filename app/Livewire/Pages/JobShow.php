<?php

namespace App\Livewire\Pages;

use App\Models\Job;
use Livewire\Attributes\Title;
use Livewire\Component;

class JobShow extends Component
{
    #[Title('Job Details')]
    public Job $job;

    public function mount(Job $job): void
    {
        $this->job = $job;
    }

    public function render()
    {
        return view('livewire.pages.job-show');
    }
}
