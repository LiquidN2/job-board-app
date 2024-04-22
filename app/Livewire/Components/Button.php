<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{
    public bool $isanchor = false;
    public string $href = "";
    public string $name = "Button";

    public function render()
    {
        return $this->isanchor
            ? view('livewire.components.button-link')->with([
                'href' => $this->href,
            ])
            : view('livewire.components.button');
    }
}
