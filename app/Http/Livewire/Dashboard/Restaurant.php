<?php

namespace App\Http\Livewire\Dashboard;
//withFileUploads

use Livewire\Component;
use Livewire\WithFileUploads;
class Restaurant extends Component

{
    use WithFileUploads;

    public $restaurants;
    public $restaurant;
    // fields   <!-- Modal with fields [ 'name_ar', 'name_en', 'description_ar', 'description_en', 'phone', 'whatsapp', 'email', 'address_ar', 'address_en', 'logo', 'cover', 'status','slogan_ar', 'slogan_en', 'facebook', 'twitter', 'instagram', 'youtube', 'snapchat', 'telegram', 'tiktok'] -->
    public $name_ar;
    public $name_en;
    public $description_ar;
    public $description_en;
    public $phone;
    public $whatsapp;
    public $email;
    public $address_ar;
    public $address_en;
    public $logo;
    public $cover;
    public $status;
    public $slogan_ar;
    public $slogan_en;
    public $facebook;
    public $twitter;
    public $instagram;
    public $youtube;
    public $snapchat;
    public $telegram;
    public $tiktok;




    public function delete($id)
    {
        $this->restaurant = \App\Models\Restaurant::find($id);
        //delete all categories
        $categories = \App\Models\Category::where('restaurant_id', $this->restaurant->id)->get();
        foreach ($categories as $category) {
            $category->delete();
        }
        //delete all products
        $products = \App\Models\Product::where('restaurant_id', $this->restaurant->id)->get();
        foreach ($products as $product) {
            $product->delete();
        }
        //delete logo and cover



        $this->restaurant->delete();
        $this->restaurants = \App\Models\Restaurant::where('user_id', auth()->user()->id)->get();
    }
    public function store()
    {
        $this->validate([
            
          'name_ar' => 'required | min:3 | max:255',
            'name_en' => ' min:3 | max:255',
            'description_ar' => 'required | min:3 | max:255',
            'description_en' => ' min:3 | max:255',
            'phone' => 'required | min:3 | max:255',
            'whatsapp' => ' min:3 | max:255',
            'email' => ' min:3 | max:255',
            'address_ar' => 'required | min:3 | max:255',
            'address_en' => ' min:3 | max:255',
          
            'logo' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'cover' => ' image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'status' => 'required ',
            'slogan_ar' => 'required | min:3 | max:255',
            'slogan_en' => ' min:3 | max:255',
            'facebook' => ' min:3 | max:255',
            'twitter' => ' min:3 | max:255',
            'instagram' => ' min:3 | max:255',
            'youtube' => ' min:3 | max:255',
            'snapchat' => ' min:3 | max:255',
            'telegram' => ' min:3 | max:255',
            'tiktok' => ' min:3 | max:255',
            
        ]);
        //dd($this->name_ar);
        // save log and cover and return paths
        $logo = $this->logo->store('public/restaurants/logos');
        $cover = $this->cover->store('public/restaurants/covers');
        //public/restaurants/ to /storage/restaurants/
        $logo = str_replace('public', '/storage', $logo);
        $cover = str_replace('public', '/storage', $cover);

        $restaurant = new \App\Models\Restaurant();
        $restaurant->name_ar = $this->name_ar;
        $restaurant->name_en = $this->name_en;
        $restaurant->description_ar = $this->description_ar;
        $restaurant->description_en = $this->description_en;
        $restaurant->phone = $this->phone;
        $restaurant->whatsapp = $this->whatsapp;
        $restaurant->email = $this->email;
        $restaurant->address_ar = $this->address_ar;
        $restaurant->address_en = $this->address_en;
       
        $restaurant->logo = $logo;
        $restaurant->cover = $cover;
        $restaurant->status = $this->status;
        $restaurant->slogan_ar = $this->slogan_ar;
        $restaurant->slogan_en = $this->slogan_en;
        $restaurant->facebook = $this->facebook;
        $restaurant->twitter = $this->twitter;
        $restaurant->instagram = $this->instagram;
        $restaurant->youtube = $this->youtube;
        $restaurant->snapchat = $this->snapchat;
        $restaurant->telegram = $this->telegram;
        $restaurant->tiktok = $this->tiktok;
        
        $restaurant->user_id = auth()->user()->id;
        $restaurant->save();
        $this->restaurants = \App\Models\Restaurant::where('user_id', auth()->user()->id)->get();
        $this->resetFields();
        //dd($restaurant);
    }
    public function resetFields()
    {
        $this->name_ar = '';
        $this->name_en = '';
        $this->description_ar = '';
        $this->description_en = '';
        $this->phone = '';
        $this->whatsapp = '';
        $this->email = '';
        $this->address_ar = '';
        $this->address_en = '';
        $this->logo = '';
        $this->cover = '';
        $this->status = '';
        $this->slogan_ar = '';
        $this->slogan_en = '';
        $this->facebook = '';
        $this->twitter = '';
        $this->instagram = '';
        $this->youtube = '';
        $this->snapchat = '';
        $this->telegram = '';
        $this->tiktok = '';
    }

    
    public function mount()
    {
        $this->restaurants = \App\Models\Restaurant::where('user_id', auth()->user()->id)->get();
    }
    
    public function render()
    {   
        return view('livewire.dashboard.restaurant', [
            'restaurants' => $this->restaurants,
        ]);
    }
}
//storage link
