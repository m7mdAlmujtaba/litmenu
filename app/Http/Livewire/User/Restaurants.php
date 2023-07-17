<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Category;

use Livewire\Component;


class Restaurants extends Component
{
    public $search;
    public $num_of_items = 10;
    public $increase_by = 10;
    public $offers;

    public function load()
    {
        $this->num_of_items +=  $this->increase_by;
    }



    public function render()
    {


        return view('livewire.user.restaurants', [
            'restaurants' => Restaurant::where('name_ar', 'like', '%' . $this->search . '%')->take($this->num_of_items)->get() ]
        )->layout('layouts.website');
    }
}
