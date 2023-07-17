<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Location;
use App\Models\Order;

use Livewire\Component;


class Checkout extends Component
{
    public $search;
    public $num_of_items = 10;
    public $longitude;
    public $latitude;
    public $address;
    public $name;
    public $add_location = false;
    public $location_id = null;
    public $delivery_cost = 0;
    public $note;
    public $payment_method = 'cash';

   

    public function mount()
    {
        //if user is not logged in redirect to login page
        if(!auth()->check()){
            return redirect('/login');
        }
        //if 
        //if cart is empty redirect to cart page
        if(session()->get('cart') == null){
            return redirect('/cart');
        }
        if (count(auth()->user()->locations) > 0 && $this->location_id == null) { 
            $this->location_id = auth()->user()->locations[0]->id;
        }else{
            $this->location_id = null;
          
        }
       
    }


    public function addLocation(){
        //validate
       //dd($this->longitude, $this->latitude, $this->address);


        $this->validate([
            'longitude' => 'required',
            'latitude' => 'required',
            'address' => 'required | string | max:255',
            'name' => 'required | string | max:255 | unique:locations,name'
        ]);
        //dd('here');


        $location =Location::create([
            'user_id' => auth()->user()->id,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'address' => $this->address,
            'name' => $this->name
        ]);
        $this->location_id = $location->id;

       // dd($location);


       
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

    function calculateDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
      // convert from degrees to radians
      $latFrom = deg2rad($latitudeFrom);
      $lonFrom = deg2rad($longitudeFrom);
      $latTo = deg2rad($latitudeTo);
      $lonTo = deg2rad($longitudeTo);
    
      $latDelta = $latTo - $latFrom;
      $lonDelta = $lonTo - $lonFrom;
    
      $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
      cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
      return $angle * $earthRadius;
    }

    public function checkout(){
        //validate
        $this->validate([
            'location_id' => 'required',
            'note' => 'nullable | string | max:255',
            'payment_method' => 'required | string | max:255 | in:cash,card'
        ]);
        //[restaurant_id,user_id,location_id,order_content,order_price,order_status,payment_method,payment_status,delivery_user_id]


        //get first key of cart
        $key = array_key_first(session()->get('cart'));
        $restaurant_id = session()->get('cart')[$key]['restaurant_id'];
        $restaurant = Restaurant::where('id',$restaurant_id)->first();
        $location = Location::where('id',$this->location_id)->first();
        $total = 0;
        foreach(session()->get('cart') as $key => $value){
            $product = Product::where('id',$key)->first();
            $total += $product->price * $value['quantity'];

        }
        $order_cost = $total;
        $total += $this->delivery_cost;
        $order =  Order::create([
            'restaurant_id' => $restaurant_id,
            'user_id' => auth()->user()->id,
            'location_id' => $this->location_id,
            'order_content' => json_encode(session()->get('cart')),
            'order_price' => $order_cost,
            'order_status' => 'pending',
            'payment_method' => $this->payment_method,
            'payment_status' => 'pending',
            'note' => $this->note,
            'delivery_price' => $this->delivery_cost,
            'total' => $total,
        ]);

        session()->forget('cart');
        session()->flash('success', 'Order placed successfully');
        return redirect('/orders');
    }
    public function deleteLocation($id){
        $location = Location::where('id',$id)->first();
        $location->delete();
        if (count(auth()->user()->locations) > 0){
            $this->location_id = auth()->user()->locations[0]->id;
        }else{
            $this->location_id = null;
        }

    }


    public function render()
    {
        if (count(auth()->user()->locations) > 0){
            
             $fromlat = Location::where('id',$this->location_id)->first()->latitude;
            $fromlong = Location::where('id',$this->location_id)->first()->longitude;
            //get first key of cart

            $key = array_key_first(session()->get('cart'));
            
            $tolat = Restaurant::where('id',session()->get('cart')[$key]['restaurant_id'])->first()->latitude;
            $tolong = Restaurant::where('id',session()->get('cart')[$key]['restaurant_id'])->first()->longitude;
            $this->delivery_cost = $this->calculateDistance($fromlat,$fromlong,$tolat,$tolong)*0.001*500;
            $this->delivery_cost = round($this->delivery_cost,2);
        }else{
            $this->delivery_cost = 0;
        }
        
        
      

        return view('livewire.user.checkout', ['cart' => session()->get('cart'),'locations'=>Location::where('user_id',auth()->user()->id)->get() ,'delivery_cost'=>$this->delivery_cost ]
        )->layout('layouts.website');
    }
}
