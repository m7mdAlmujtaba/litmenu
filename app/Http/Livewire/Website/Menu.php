<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class Menu extends Component
{
    public $restaurant;

    public function mount($menu,$res)
    {
        $this->restaurant = \App\Models\Restaurant::find($res);
    }
    public function render()
    {
        return view('livewire.website.menu1',    [
            'restaurant' => $this->restaurant,
        ]
        )->layout('layouts.website');
    }
}
