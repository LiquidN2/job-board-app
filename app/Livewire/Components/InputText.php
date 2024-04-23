<?php

namespace App\Livewire\Components;

use Livewire\Component;

class InputText extends Component
{
    public string $type = "text";
    public string $name = "";
    public string $id = "";
    public bool $required = false;

    public function render()
    {
        return <<<'HTML'
            <input
                type="{{ $this->type }}"
                name="{{ $this->name }}"
                id="{{ $this->id }}"
                :required="$this->required"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        HTML;
    }
}
