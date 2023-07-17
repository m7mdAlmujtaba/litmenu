<?php

namespace App\Http\Livewire\User;

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

            return redirect('/main');
         
    }

    public function render()
    {
        return view('livewire.user.index')->layout('layouts.website');
    }
}
