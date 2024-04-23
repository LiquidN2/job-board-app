<?php

namespace App\Livewire\Components;

use App\Models\Job;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

class FormJob extends Component
{
    public Job|null $job = null;

    public int $employer_id = 1;

    public string $title = '';

    public int $salary = 0;

    public string $description = '';

    #[Computed]
    public function type(): string
    {
        return $this->job_id ? 'edit' : 'create';
    }

    public function mount()
    {
        if ($this->job) {
            $this->employer_id = $this->job->employer->id;
            $this->title = $this->job->title;
            $this->salary = $this->job->salary;
            $this->description = $this->job->description;
        }
    }

    public function save()
    {
        $attributes = $this->validate([
            'title'       => 'required|min:3',
            'salary'      => 'required',
            'description' => '',
            'employer_id' => 'required',
        ]);

        if ($this->job) {
            $this->job->update($attributes);
        } else {
            $attributes['employer_id'] = 1;
            Job::create($attributes);
        }

        return redirect()->to('/jobs');
    }

    public function delete()
    {
        if (is_null($this->job)) return null;

        $this->job->delete();
        return redirect()->to('/jobs');
    }

    #[Title('Edit Job')]
    public function render()
    {
        return view('livewire.components.form-job');
    }
}
