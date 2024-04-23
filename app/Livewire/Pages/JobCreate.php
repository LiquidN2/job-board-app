<?php

namespace App\Livewire\Pages;

use App\Models\Job;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class JobCreate extends Component
{
    #[Validate('required')]
    #[Validate('min:3')]
    public string $title = '';

    #[Validate('required')]
    public int $salary = 0;

    public string $description = '';

    public function save()
    {
        $this->validate();

        Job::create([
            'title'       => $this->title,
            'salary'      => $this->salary,
            'description' => $this->description,
            'employer_id' => 1
        ]);

        return redirect()->to('/jobs');
    }

    #[Title('Create Job')]
    public function render()
    {
        return view('livewire.pages.job-create');
    }
}
