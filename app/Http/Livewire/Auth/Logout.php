<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout() {
        auth()->logout();
        return redirect('/login');
    }
    public function mount()
    {
        $this->logout();
    }
   
    public function render()
    {
        return view('livewire.auth.logout')->layout('layouts.website');
    }
}
