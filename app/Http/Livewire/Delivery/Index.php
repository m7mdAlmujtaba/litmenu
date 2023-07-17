<?php

namespace App\Http\Livewire\Delivery;

use Livewire\Component;

class Index extends Component
{
    public $longitude;
    public $latitude;



    public function acceptlocation()
    {
       //save longitude and latitude in session
         session()->put('longitude', $this->longitude);
         session()->put('latitude', $this->latitude);

         auth()->user()->update([
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
        ]);

            return redirect('/delivery/orders');
         
    }

    public function render()
    {
        return view('livewire.user.index')->layout('layouts.website');
    }
}
