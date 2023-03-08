<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Restaurant extends Component

{
    public $restaurants;
    public $restaurant;

    
    public function mount()
    {
        $this->restaurants = \App\Models\Restaurant::all();
    }
    
    public function render()
    {   
        return view('livewire.dashboard.restaurant', [
            'restaurants' => $this->restaurants,
        ]);
    }
}
