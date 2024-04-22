<?php

namespace App\Livewire\Components;

use Livewire\Component;

class NavLink extends Component
{
    public bool $active = false;
    public string $path = "";
    public string $href = "";
    public string $name = "";

    public function mount(): void
    {
        $this->href = !empty($this->path) ? "/" . $this->path : "/";
        $this->active = $this->href === "/" ? request()->is("/") : request()->is($this->path);
    }

    public function render()
    {
        return view('livewire.components.nav-link');
    }
}
