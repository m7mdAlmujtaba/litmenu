<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;
class Orders extends Component
{
    //pagination
    use WithPagination;
    //bootstrap pagination
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $num_of_items = 25;
    public $order_id;
    public $delivery_user_id = null;


    public function set_order_id($id) {
        $this->order_id = $id;
        $order = Order::find($id);
        $this->delivery_user_id = $order->delivery_user_id;
    }
    public function set_delivery_user_id() {
        //dd($this->delivery_user_id);
        $order = Order::find($this->order_id);
        $order->delivery_user_id = $this->delivery_user_id;
        $order->save();
    }

    public function setState ($id, $state) {
        $order = Order::find($id);
        $order->order_status = $state;
        $order->save();

        session()->flash('message', 'تم تغيير حالة الطلب بنجاح');
    }
    public function render()
    {
        return view('livewire.admin.orders', [
            'orders' => Order::orderBy('id','DESC')->paginate($this->num_of_items),
            'delivery_users' => User::role('delivery')->get()
        ]);
    }
}
