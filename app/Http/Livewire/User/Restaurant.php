<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Restaurant as RestaurantModel;
use App\Models\Category;

use Livewire\Component;


class Restaurant extends Component
{
    public $search;
    public $num_of_items = 25;
    public $offers;
    public $restaurant;

    public function mount($id)
    {
        $this->offers = Product::where('restaurant_id', $id)->orderBy('discount', 'desc')->get( );
        $this->restaurant = \App\Models\Restaurant::find($id);
    }
    public function add_to_cart($id){
        $product = Product::find($id);
        $cart = session()->get('cart');
        //if restaurant is not the same as the other products in the cart then clear the cart
        if($cart){
            foreach($cart as $item){
                if($item['restaurant_id'] != $product->restaurant_id){
                    session()->forget('cart');
                    session()->flash('msg', ' لا يمكنك اضافة منتجات من مطاعم مختلفة في السلة تم مسح السلة');
                }
            }
        }
        $cart = session()->get('cart');
        
        // if cart is empty then this the first product

        if(!$cart) {
            $cart = [
                    $id => [
                        "name_ar" => $product->name_ar,
                        "name_en" => $product->name_en,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image,
                        "discount" => $product->discount,
                        "total" => $product->price ,
                        "restaurant_id" => $product->restaurant_id,
                    ]
            ];
            session()->put('cart', $cart);
            return;
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['total'] = $cart[$id]['quantity'] * $cart[$id]['price'] ;
            session()->put('cart', $cart);
            return;
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name_ar" => $product->name_ar,
            "name_en" => $product->name_en,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image,
            "discount" => $product->discount,
            "total" => $product->price,
            "restaurant_id" => $product->restaurant_id,
        ];
        session()->put('cart', $cart);

    }
  


    public function render()
    {

        return view('livewire.user.restaurant', [
            'restaurant' => $this->restaurant,
            'categories' => Category::where('restaurant_id', $this->restaurant->id)->get(),
        
            'products' => Product::where('restaurant_id', $this->restaurant->id)->where('name_ar', 'like', '%' . $this->search . '%')->get( ),
            'offers' => $this->offers]
        )->layout('layouts.website');
    }
}
