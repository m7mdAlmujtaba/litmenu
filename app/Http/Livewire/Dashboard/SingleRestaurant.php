<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;

class SingleRestaurant extends Component
{
    use WithFileUploads;

    public $restaurant;
    public $categories;
    public $logo;
    public $cover;
    //fields    <!-- modal to add new product  [ 'category_id', 'name_ar', 'name_en', 'description_ar', 'description_en', 'status', 'image', 'price', 'discount', 'order']-->
    public $category_id;
    public $section_id;
    public $name_ar;
    public $name_en;
    public $description_ar;
    public $description_en;
    public $status;
    public $image;
    public $price;
    public $discount;
    public $order;
    public $category;
    public $products;
    public $orders;
    public $sections;
    public $current_status;
    public $current_price;
    public $current_product_id;


    public function set_current_product_id($id){
        $this->current_product_id = $id;
        $product = \App\Models\Product::find($id);
        $this->current_status = $product->status;
        $this->current_price = $product->price;
    }
    public function save_current_product()
    {
        $product = \App\Models\Product::find($this->current_product_id);
        $product->price = $this->current_price;
        $product->status = $this->current_status;
        $product->save();
        session()->flash('update_message', 'تم تعديل السعر بنجاح');
        $this->current_product_id = null;
        $this->current_status = null;
        $this->current_price = null;
        //refresh page
        $this->refreshComponent();  

    }


    public function updateLogoandCover(){
        $this->validate([
            'logo' => [ 'image', 'max:2048'],
            'cover' => [ 'image', 'max:2048'],
        ]);

        if($this->logo){
            //delete old logo
            if($this->restaurant->logo){
                $oldLogo = str_replace('/storage/', 'public/', $this->restaurant->logo);
                \Storage::delete($oldLogo);
            }
            $this->logo = $this->logo->store('public/restaurants');
            $this->logo = str_replace('public/', '/storage/', $this->logo);
            $this->restaurant->logo = $this->logo;
        }
        if($this->cover){
            //delete old cover
            if($this->restaurant->cover){
                $oldCover = str_replace('/storage/', 'public/', $this->restaurant->cover);
                \Storage::delete($oldCover);
            }
            $this->cover = $this->cover->store('public/restaurants');
            $this->cover = str_replace('public/', '/storage/', $this->cover);
            $this->restaurant->cover = $this->cover;
        }
        $this->restaurant->save();

        $this->logo = null;
        $this->cover = null;
    }

    public function addCategory(){
       //fields [ 'name_ar', 'name_en', 'description_ar', 'description_en', 'slug', 'status', 'restaurant_id', 'image', 'parent_id', 'order', 'type', 'icon', 'color']
      
 
       $this->validate([
            'category.name_ar' => ['required', 'min:3', 'max:255'], 
            'category.name_en' => ['required', 'min:3', 'max:255'],
            'category.description_ar' => ['required', 'min:3', 'max:255'],
            'category.description_en' => [ 'min:3', 'max:255'],
            'category.status' =>  ['required'],
            'category.image' => ['required', 'image', 'max:1024'],
            'category.order' => ['required' , 'numeric'],
            //valid color
            'category.color' => ['required', 'regex:/^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/'],

      
        ]);
        $this->category['image'] = $this->category['image']->store('public/categories');
        $this->category['image'] = str_replace('public/', '/storage/', $this->category['image']);
       
        $category = \App\Models\Section::create($this->category);
        $category->restaurant_id = $this->restaurant->id;
        //user_id
        $category->user_id = auth()->user()->id;
        $category->save();
        $this->resetCategory();
        $this->categories = \App\Models\Section::where('restaurant_id', $this->restaurant->id)->orderBy('order', 'asc')->get();
        //refresh component
        $this->refreshComponent();  
    }
    public function resetCategory(){
        $this->category = [
            'name_ar' => '',
            'name_en' => '',
            'description_ar' => '',
            'description_en' => '',
            'status' => '',
            'image' => '',
            'order' => '',
            'color' => '',
        ];
    }


    public function addProduct()
    {
        $this->validate([
            'category_id' => 'required | numeric | exists:categories,id',
            'section_id' => 'required | numeric | exists:sections,id',
            'name_ar' => 'required',
            'name_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'status' => 'required',
            'image' => 'required',
            'price' => 'required | numeric | min:0 ',
            'discount' => 'required | numeric | min:0 | max:100',
            'order' => 'required | numeric | min:0',
        ]);
        $this->image = $this->image->store('public/products');
        $this->image = str_replace('public/', '/storage/', $this->image);


        $product = new \App\Models\Product();
        $product->category_id = $this->category_id;
        $product->name_ar = $this->name_ar;
        $product->name_en = $this->name_en;
        $product->description_ar = $this->description_ar;
        $product->description_en = $this->description_en;
        $product->status = $this->status;
        $product->image = $this->image;
        $product->price = $this->price;
        $product->discount = $this->discount;
        $product->order = $this->order;
        $product->restaurant_id = $this->restaurant->id;
        $product->save();
        $this->resetProduct();
        //reset products
        $this->products = \App\Models\Product::where('restaurant_id', $this->restaurant->id)->get();
        //dd($this->restaurant);
    }
    public function resetProduct()
    {
        $this->name_ar = '';
        $this->name_en = '';
        $this->description_ar = '';
        $this->description_en = '';
        $this->status = '';
        $this->image = '';
        $this->price = '';
        $this->discount = '';
        $this->order = '';
    }
    public function deleteCategory($id)
    {
        $category = \App\Models\Section::find($id);
        if($category->image){
            $oldImage = str_replace('/storage/', 'public/', $category->image);
            \Storage::delete($oldImage);
        }
        //delete products
        $products = \App\Models\Product::where('category_id', $category->id)->get();
        foreach($products as $product){
            $this-> deleteProduct($product->id);
        }

        $category->delete();
        $this->sections = \App\Models\Section::where('restaurant_id', $this->restaurant->id)->orderBy('order', 'asc')->get();
        //refresh component
        $this->refreshComponent();
    }
    public function refreshComponent()
    {
       redirect()->to('/dashboard/restaurant/'.$this->restaurant->id);
    }
    public function deleteProduct($id)
    {
        $product = \App\Models\Product::find($id);
        if($product->image){
            $oldImage = str_replace('/storage/', 'public/', $product->image);
            \Storage::delete($oldImage);
        }
        $product->delete();
        $this->products = \App\Models\Product::where('restaurant_id', $this->restaurant->id)->orderBy('order', 'asc')->get();
    }

    public function setState ($id, $state) {
        //validate if state is valid['preparing','ready']
        
        if ($state != 'preparing' && $state != 'ready') {
            session()->flash('error', 'حدث خطأ ما');
            return;
        }

        
        $order = \App\Models\Order::find($id);
        $order->order_status = $state;
        $order->save();

        session()->flash('message', 'تم تغيير حالة الطلب بنجاح');
    }


    public function mount($id)
    {
        $this->restaurant = \App\Models\Restaurant::find($id);
        $this->categories = \App\Models\Category::orderBy('order', 'asc')->get();
        $this->products = \App\Models\Product::where('restaurant_id', $this->restaurant->id)->orderBy('order', 'asc')->get();
        //orders if order status is accepted, preparing, ready
        $this->orders = \App\Models\Order::where('restaurant_id', $this->restaurant->id)->whereIn('order_status', ['accepted', 'preparing', 'ready'])->orderBy('created_at', 'desc')->get();
        $this->sections = \App\Models\Section::where('restaurant_id', $this->restaurant->id)->orderBy('order', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.dashboard.single-restaurant' , [
            'restaurant' => $this->restaurant,
            'categories' => $this->categories,
            'products' => $this->products,
            'orders' => $this->orders,
            'sections' => $this->sections,
        ]);
    }
}
