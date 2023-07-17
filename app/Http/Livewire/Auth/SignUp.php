<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $terms = false;//should be true to submit form
    public $name = '';
    public $email = '';
    public $password = ''; 
    public $phone = '';//in form 7xxxxxxxx should be 9 digits starting with 7


    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:6',
        'phone' => 'required|min:9|max:9|unique:users|regex:/^7[0-9]{8}$/',
        'terms' => 'required|boolean|in:1'
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
    }

    public function register() {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'phone' => $this->phone
        ]);
        //assign role
        $user->assignRole('user');


        auth()->login($user);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
