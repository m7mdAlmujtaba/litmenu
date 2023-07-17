<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Category;

use Livewire\Component;


class Cart extends Component
{
    public $search;
    public $num_of_items = 10;
    public $offers;

    public function mount()
    {
        $this->offers = Product::orderBy('discount', 'desc')->limit(10)->get();
    }

    public function removeFromCart($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
    }
    public function increment($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['total'] = $cart[$id]['quantity'] * $cart[$id]['price'] ;
            session()->put('cart', $cart);
        }
    }

    public function decrement($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            if($cart[$id]['quantity'] > 1){
                $cart[$id]['quantity']--;
                $cart[$id]['total'] = $cart[$id]['quantity'] * $cart[$id]['price'] ;
                session()->put('cart', $cart);
            }
        }
    }
    public function checkout(){
        $cart = session()->get('cart');
        $minimum_order = config('variables.minimum_order');
        //check if the cart is empty or less than minimum order
        $total = 0;
        if($cart){
            foreach($cart as $item){
                $total += $item['total'];
            }
        }
        if($total < $minimum_order){
            session()->flash('msg', 'الحد الادني للطلب هو '.$minimum_order.' ريال');
            return;
        }
        return redirect('/checkout');



    }



    public function render()
    {

        return view('livewire.user.cart', ['cart' => session()->get('cart') ]
        )->layout('layouts.website');
    }
}
