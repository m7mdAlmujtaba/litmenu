<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Order;

use Livewire\Component;


class Orders extends Component
{
    public $search;
    public $num_of_items = 10;
    public $is_single_order = false;
    public $order_id;
    public $order;
    public $restaurant_rating;
    public $delivery_rating;
    public $comment;

    //public $orders;
   

    public function mount()
    {
        //$this->orders = auth()->user()->orders()->paginate($this->num_of_items);
    }

    public function change_order_status($status) {
        $this->validate([
            'order_id' => 'required|integer|exists:orders,id',
        ]);
        //check if status is in ['recieved']
        if (!in_array($status, ['recieved'])) {
            session()->flash('message', 'حالة الطلب غير مقبولة');
            return;
        }

        $order = Order::find($this->order_id);
        $order->order_status = $status;
        $order->save();
        session()->flash('message', 'تم تغيير حالة الطلب بنجاح');
        $this->order = Order::find($this->order_id);
    }
    public function rate_order()
    {
        $this->validate([
            'order_id' => 'required|integer|exists:orders,id|unique:ratings,order_id',
            'restaurant_rating' => 'required|integer|min:1|max:5',
            'delivery_rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);
       // dd($this->order_id);

        $rating = new Rating();
        $rating->user_id = auth()->user()->id;
        $rating->restaurant_id = $this->order->restaurant_id;
        $rating->delivery_id = $this->order->delivery_user_id;
        $rating->order_id = $this->order_id;
        $rating->restaurant_rating = $this->restaurant_rating;
        $rating->delivery_rating = $this->delivery_rating;
        $rating->comment = $this->comment;
        $rating->save();



        session()->flash('message', 'تم تقييم الطلب بنجاح');
    }

   public function set_order_id($id) {
        $this->order_id = $id;
        $this->is_single_order = true;
        $this->order = auth()->user()->orders()->find($id);
    }

    public function back()
    {
        $this->is_single_order = false;
    }




    public function render()
    {

        return view('livewire.user.orders', ['orders' => auth()->user()->orders()->orderBy('id', 'desc')->paginate($this->num_of_items) ]
        )->layout('layouts.website');
    }
}
