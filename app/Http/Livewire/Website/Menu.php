<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        return view('livewire.website.menu')->layout('layouts.website');
    }
}
