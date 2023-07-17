<?php

namespace App\Http\Livewire\Delivery;

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
    public $increase_by = 10;

    //public $orders;
   

    public function mount()
    {
        //$this->orders = auth()->user()->orders()->paginate($this->num_of_items);
    }

   public function set_order_id($id) {
        $this->order_id = $id;
        $this->is_single_order = true;
        $this->order = Order::find($id);
    }
    public function change_order_status($status) {
        $this->validate([
            'order_id' => 'required|integer|exists:orders,id',
        ]);
        //check if status is in ['on_way', 'delivered']
        if (!in_array($status, ['on_way', 'delivered'])) {
            session()->flash('message', 'حالة الطلب غير مقبولة');
            return;
        }

        $order = Order::find($this->order_id);
        $order->order_status = $status;
        $order->save();
        session()->flash('message', 'تم تغيير حالة الطلب بنجاح');
        $this->order = Order::find($this->order_id);
    }

    public function back()
    {
        $this->is_single_order = false;
    }

    public function load()
    {
        $this->num_of_items +=  $this->increase_by;
    }




    public function render()
    {

        return view('livewire.delivery.orders', ['orders' => Order::where('delivery_user_id', auth()->user()->id)
        ->orderBy('id', 'desc')->take($this->num_of_items)->get() ]
        )->layout('layouts.website');
    }
}
