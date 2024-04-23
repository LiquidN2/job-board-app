<?php

namespace App\Livewire\Components;

use Livewire\Component;

class InputLabel extends Component
{
    public string $for = "";
    public string $label = "";

    public function render()
    {
        return <<<'HTML'
        <label for="{{ $this->for }}" class="block text-sm font-medium leading-6 text-gray-900">
            {{ $this->label }}
        </label>
        HTML;
    }
}
