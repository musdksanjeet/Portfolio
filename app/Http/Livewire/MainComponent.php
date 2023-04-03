<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainComponent extends Component
{
    public function render()
    {
        return view('livewire.main-component')->layout("layouts.base");
    }
}
