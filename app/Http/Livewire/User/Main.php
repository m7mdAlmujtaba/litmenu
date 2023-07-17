<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Category;

use Livewire\Component;


class Main extends Component
{
    public $search;
    public $num_of_items = 10;
    public $offers;

    public function mount()
    {
        $this->offers = Product::orderBy('discount', 'desc')->limit(10)->get();
       
    }

    public function get_restaurants_orderd_by_distance($lon,$lat) {
        $rest = Restaurant::selectRaw('ST_Distance_Sphere(point(lng, lat), point(?, ?))/1000  AS distance,logo,id,name_ar,address_ar', [$lon, $lat]);
        //joint with other fields

        $rest = $rest->orderBy('distance', 'asc');

        return $rest;


    }



    public function render()
    {
        $lon = session()->get('longitude');
        $lat = session()->get('latitude');
        //double check if valid  numbers
        if(!is_numeric($lon) || !is_numeric($lat)) {
            $lon = 0;
            $lat = 0;
        }


        return view('livewire.user.main', [
            'restaurants' => $this->get_restaurants_orderd_by_distance($lon,$lat)->limit($this->num_of_items)->get(),
            'categories' => Category::where('name_ar', 'like', '%' . $this->search . '%')->limit($this->num_of_items)->get(),
            'products' => Product::where('name_ar', 'like', '%' . $this->search . '%')->limit($this->num_of_items)->get() ,
            'offers' => $this->offers]
        )->layout('layouts.website');
    }
}
