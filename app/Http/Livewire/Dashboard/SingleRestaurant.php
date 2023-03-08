<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class SingleRestaurant extends Component
{
    public $restaurant;

    public function mount($id)
    {
        $this->restaurant = \App\Models\Restaurant::find($id);
    }
    public function render()
    {
        return view('livewire.dashboard.single-restaurant' , [
            'restaurant' => $this->restaurant,
        ]);
    }
}
