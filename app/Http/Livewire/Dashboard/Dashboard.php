<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public $restaurants;
    public $categories;
    public function mount()
    {
        $this->restaurants = \App\Models\Restaurant::where('user_id', auth()->user()->id)->get();
        $this->categories = \App\Models\Category::where('user_id', auth()->user()->id)->get();

    }
    public function render()
    {
        return view('livewire.dashboard.dashboard', [
            'restaurants' => $this->restaurants,
            'categories' => $this->categories,
        ]);
    }
}
