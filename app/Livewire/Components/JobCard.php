<?php

namespace App\Livewire\Components;

use Livewire\Component;

class JobCard extends Component
{
    public string $id;
    public string $title;
    public string $employer;
    public string $description;
    public int $salary;

    public function render()
    {
        return view('livewire.components.job-card');
    }
}
