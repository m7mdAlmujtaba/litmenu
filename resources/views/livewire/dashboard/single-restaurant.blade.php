<div>


@php
use Illuminate\Support\Str;
function excerpt($string, $limit = 100)
{
    return Str::limit($string, $limit);
}
@endphp

<div class="main-content">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('{{
            $restaurant->cover
        }}'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{ $restaurant->logo
                        }}" alt="..." class="w-100 border-radius-lg shadow-sm">
                        <!-- togle modal -->

                        <a href=""  data-bs-toggle="modal" data-bs-target="#editImageModal"
                        class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                        <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Edit Image"></i>
                        </a>
                      


                                



                    
                    

                      
                </div>
                
                
            </div>
            
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                       {{
                            $restaurant->name_ar}}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        {{ $restaurant->slogan_ar }}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                       



                                                


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--edit image modal -->
  <div class="modal fade" id="editImageModal" tabindex="-1" role="dialog" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">edit logo and cover
               </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">
            <form wire:submit.prevent="updateLogoandCover">
                <div class="form-group">
                    <label for="logo">logo</label>
                    <input type="file" class="form-control" wire:model="logo">
                    @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
               <div class="form-group">
                    <label for="cover">cover</label>
                    <input type="file" class="form-control" wire:model="cover">
                    @error('cover') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
               
            </form>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="updateLogoandCover">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">
                        {{ __('Restaurant Details') }}
                    </h6>
                </div>
                <div class="card-body p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Menus</h6>
                    <ul class="list-group">
                        <!-- link to menue 1 -->
                        <li class="list-group-item border-0 px-0">
                            <strong>   Menue 1 </strong> 
                               <a class="d-flex align-items-center text-body" href="/menu/1/{{$restaurant->id}}" target="_blank">
                              Link <i class="fas fa-utensils ms-auto"></i>
                            </a>
                            <a class="d-flex align-items-center text-body" href="#"  data-bs-toggle="modal" data-bs-target="#qrModal1">  
                              QR Code<i class="fas fa-qrcode ms-auto"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="qrModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel1">QR Code for Menue 1
                                         </h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/qr-code/1/{{$restaurant->id}}" alt="QR Code" class="img-fluid" width="100%" >
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a type="button" class="btn btn-primary" href="/qr-code/1/{{$restaurant->id}}" download >Download QR Code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                             
                             
                             <!--
                             
                                <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault">Email me when someone follows me</label>
                            </div>
                        </li> -->
                     
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0" id="overview">
                                {{ __('Overview') }}
                            </h6>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="javascript:;">
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Profile"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <p class="text-sm">
                        {{$restaurant->description_ar}}
                    </p>
                    <hr class="horizontal gray-light my-4">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                            {{ __('Name') }}
                            :</strong> &nbsp; {{$restaurant->name_ar}}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('Phone') }}
                            :</strong>
                            &nbsp; {{$restaurant->phone}}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('Email')}}
                            :</strong>
                            &nbsp; {{$restaurant->email}}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('Address') }}
                            :</strong>
                            &nbsp; {{$restaurant->address_ar}}
                        </li>
                        <li class="list-group-item border-0 ps-0 pb-0">
                            <strong class="text-dark text-sm">Social:</strong> &nbsp;
                            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{$restaurant->facebook}}">
                                <i class="fab fa-facebook fa-lg"></i>
                            </a>
                            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{$restaurant->twitter
                             }}">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="{{  $restaurant->instagram
                            }}">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a class="btn btn-youtube btn-simple mb-0 ps-1 pe-2 py-0" href="{{  $restaurant->youtube
                            }}">
                                <i class="fab fa-youtube fa-lg"></i>
                            </a>
                            <a class="btn btn-snapchat btn-simple mb-0 ps-1 pe-2 py-0" href="{{  $restaurant->snapchat
                            }}">
                                <i class="fab fa-snapchat fa-lg"></i>
                            </a>
                            <a class="btn btn-whatsapp btn-simple mb-0 ps-1 pe-2 py-0" href="{{  $restaurant->whatsapp
                            }}">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                            <a class="btn btn-telegram btn-simple mb-0 ps-1 pe-2 py-0" href="{{  $restaurant->telegram
                            }}">
                                <i class="fab fa-telegram fa-lg"></i>
                            </a>
                            <!--tiktok-->
                            <a class="btn btn-tiktok btn-simple mb-0 ps-1 pe-2 py-0" href="{{ $restaurant->tiktok}}" >
                                <i class="fab fa-tiktok fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">
                        {{ __('Sections') }}
                    </h6>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        @foreach ($restaurant->sections as $category)
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2" style="background: {{ $category->color}};">
                            <div class="avatar me-3">
                                <img src="{{ $category->image}}" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $category->name_ar}}</h6>
                                <p class="mb-0 text-xs">
                                    {{ excerpt($category->description_ar, 20)}}
                                </p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;" wire:click="deleteCategory({{ $category->id}})"> 
                            Delete</a>
                        </li>

                        @endforeach
                      

                      
                        
                    </ul>

                      <!-- add new category togle modal-->
                      <button  class="btn btn-link pe-3 ps-0 mb-0 ms-auto" data-bs-toggle="modal"
                      data-bs-target="#addCategoryModal" href="#">Add New Category</button>




                </div>

                  <!-- Modal [ 'name_ar', 'name_en', 'description_ar', 'description_en', 'status', 'image', 'order',  'color'] -->
                  <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" wire:ignore.self>
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel1">Add  New Category
                             </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                        </div>
                        <div class="modal-body">
                          <form wire:submit.prevent="addCategory">
                            <!-- name_ar -->
                            <div class="mb-3">
                              <label for="name_ar" class="form-label">Name Arabic</label>
                              <input type="text" class="form-control" id="name_ar" wire:model="category.name_ar">
                              @error('category.name_ar') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- name_en -->
                            <div class="mb-3">
                              <label for="name_en" class="form-label">Name English</label>
                              <input type="text" class="form-control" id="name_en" wire:model="category.name_en">
                              @error('category.name_en') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- description_ar -->
                            <div class="mb-3">
                                <label for="description_ar" class="form-label">Description Arabic</label>
                                <textarea class="form-control" id="description_ar" wire:model="category.description_ar"></textarea>
                                @error('category.description_ar') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            <!-- description_en -->
                            <div class="mb-3">
                                <label for="description_en" class="form-label">Description English</label>
                                <textarea class="form-control" id="description_en" wire:model="category.description_en"></textarea>
                                @error('category.description_en') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            <!-- status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" id="status" wire:model="category.status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('category.status') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" wire:model="category.image">
                                @error('category.image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- order -->
                            <div class="mb-3 col-x-6">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" class="form-control" id="order" wire:model="category.order">
                                @error('category.order') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- color -->
                            <div class="mb-3 col-x-6">
                                <label for="color" class="form-label">Color</label>
                                <input type="color" class="form-control" id="color" wire:model="category.color">
                                @error('category.color') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                           
            
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button wire:click.prevent="addCategory()" href="#" type="button" class="btn btn-primary" >Save changes</button>
                        </div>
                        </div>
                        </div>
                        </div>
            </div>
        </div>
        <div class="col-12 mt-4" id="products">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">
                        {{ __('Products') }}
                    </h6>
                    <p class="text-sm">
                        {{ __('All Products') }}    
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                {{ __('Image') }}
                                            </th>
                                            <th>
                                                {{ __('Name') }}
                                            </th>
                                            <th>
                                                {{ __('Price') }}
                                            </th>
                                            <th>
                                                {{ __('Category') }}
                                            </th>
                                            <th>
                                                {{ __('Action') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ $product->image}}" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $product->name_ar}}</p>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-sm">{{ $product->price}}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-sm">
                                                    {{ $product->category->name_ar}}
                                                </span>
                                            </td>
                                            <td>
                                                <a href=""
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    <i class="fas fa-edit"></i>
                                                </a>


                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#editModal{{$product->id}}" 
                                                    wire:click="set_current_product_id({{$product->id}})"
                                 
                                                    >{{__('Edit')}}</a>
                    
                                                    <! -- Modal to edit -->
                                                    <div wire:ignore class="modal fade" id="editModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                {{__('Details')}}
                                                            </h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <!--price-->
                                                          <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="current_price">{{__('Price')}}</label>
                                                                <input type="number" class="form-control" id="current_price" wire:model="current_price">
                                                                @error('current_price') <span class="text-danger">{{ $message }}</span> @enderror

                                                            </div>
                                                            <!--status-->
                                                            <div class="form-group">
                                                                <label for="current_status">{{__('Status')}}</label>
                                                                <select class="form-control" id="current_status" wire:model="current_status">
                                                                    <option value="1">{{__('Active')}}</option>
                                                                    <option value="0">{{__('Inactive')}}</option>
                                                                </select>
                                                                @error('current_status') <span class="text-danger">{{ $message }}</span> @enderror

                                                            </div>



                                                         
                                                            
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" wire:click.prevent="save_current_product({{$product->id}})">{{__('Save')}}</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                {{__('Close')}}
                                                            </button>
                                                          
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>








                                                <a href=""
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" wire:click.prevent="deleteProduct({{ $product->id }})"
                                                    data-original-title="Delete user">
                                                    <i class="fas fa-trash"></i>
                                                </a>

                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                                <!-- add new product -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addProduct">
                                    Add New Product
                                </button>
                             
                            </div>
                                 <!-- modal to add new product  [ 'category_id', 'name_ar', 'name_en', 'description_ar', 'description_en', 'status', 'image', 'price', 'discount', 'order']-->
    <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Restaurant</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent="addProduct">
                <!-- category_id -->
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" wire:model="category_id">
                        
                        @foreach ($categories as $category)
                        <option value="{{ $category->id}}">{{ $category->name_ar}}</option>
                        @endforeach
                    </select>
                    @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="section_id" class="form-label">Section</label>
                    <select class="form-select" aria-label="Default select example" wire:model="section_id">
                        
                        @foreach ($sections as $section)
                        <option value="{{ $section->id}}">{{ $section->name_ar}}</option>
                        @endforeach
                    </select>
                    @error('section_id') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                  <label for="name" class="form-label">Name Arabic</label>
                  <input type="text" class="form-control" id="name" wire:model="name_ar">
                  @error('name_ar') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                  <label for="name_en" class="form-label">Name English</label>
                  <input type="text" class="form-control" id="name_en" wire:model="name_en">
                  @error('name_en') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- description_ar -->
                <div class="mb-3">
                    <label for="description_ar" class="form-label">Description Arabic</label>
                    <textarea class="form-control" id="description_ar" rows="3" wire:model="description_ar"></textarea>
                    @error('description_ar') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- description_en -->
                <div class="mb-3">
                    <label for="description_en" class="form-label">Description English</label>
                    <textarea class="form-control" id="description_en" rows="3" wire:model="description_en"></textarea>
                    @error('description_en') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- status -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" wire:model="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" wire:model="image">
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" wire:model="price">
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- discount -->
                <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" class="form-control" id="discount" wire:model="discount">
                    @error('discount') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- order -->
                <div class="mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="text" class="form-control" id="order" wire:model="order">
                    @error('order') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
          

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" wire:click.prevent="addProduct()">Save changes</button>
            </div>
            </div>
            </div>
            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>


        <!--Orders-->
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h1>
                    {{__('Orders')}}
                  </h1>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        
                        
                    @endif
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            {{__('Restaurant Name')}}
                          </th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            {{__('Delivery')}}
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            {{__('Status')}}
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            {{__('Date')}}
                          </th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="{{$order->restaurant->logo}}" class="avatar avatar-sm me-3">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">
                                    #{{$order->id}}
                                    {{$order->restaurant->name_ar}}
                                </h6>
                                <p class="text-xs text-secondary mb-0">
                                    {{$order->order_price}} {{__('YR')}}
                                </p>
                              </div>
                              <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#detailsModal{{$order->id}}" 
                                    
                                 
                                >{{__('Details')}}</a>

                                <! -- Modal to assign delivery user -->
                                <div wire:ignore class="modal fade" id="detailsModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            {{__('Details')}}
                                        </h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                       <table>
                                            <tr>
                                                <td>
                                                    {{__('Restaurant Name')}}
                                                </td>
                                                <td>
                                                    {{$order->restaurant->name_ar}}
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>
                                                    {{__('Restaurant Logo')}}
                                                </td>
                                                <td>
                                                    <img src="{{$order->restaurant->logo}}" class="avatar avatar-sm me-3">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{__('Order Status')}}
                                                </td>
                                                <td>
                                                    {{$order->order_status}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{__('Order Time')}}
                                                </td>
                                                <td>
                                                    {{$order->created_at->diffForHumans()}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{__('Order Details')}}
                                                </td>
                                                <td>
                                                  @php 

                                                    $order_content = json_decode($order->order_content,true);
                                                  @endphp
                                                    <table>
                                                      <tr>
                                                        <th>
                                                          {{__('Name')}}
                                                        </th>
                                                        <th>
                                                          {{__('Price')}}
                                                        </th>
                                                        <th>
                                                          {{__('Quantity')}}
                                                        </th>
                                                      <th>
                                                        {{__('Total')}}
                                                      </th>
                                                      

                                                      </tr>
                                                      @foreach ($order_content as $item)
                                                        <tr>
                                                          <td>
                                                            {{$item['name_ar']}}
                                                          </td>
                                                          <td>
                                                            {{$item['price']}}
                                                          </td>
                                                          <td>
                                                            {{$item['quantity']}}
                                                          </td>
                                                          <td>
                                                            {{$item['total']}}
                                                          </td>
                                                        </tr>
                                                      @endforeach
                                                    </table>                                                       
                                                   
                                                   
                                                </td>
                                            </tr>



                                          
                                           

                                        </table>
                                        
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            {{__('Close')}}
                                        </button>
                                      
                                      </div>
                                    </div>
                                  </div>
                                </div>







                            </div>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0">
                                @if ($order->delivery_user == null)
                                    {{__('No Delivery User')}}
                                    
                                @else
                                    {{$order->delivery_user->name}}

                                @endif
                               




                            </p>
                            <p class="text-xs text-secondary mb-0">
                                {{$order->delivery_price}} {{__('YR') }}
                            </p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            @if ($order->order_status == 'pending')
                                <span class="badge badge-sm bg-gradient-warning">{{__('Pending')}}</span>
                                
                            @elseif ($order->order_status == 'accepted')
                                <span class="badge badge-sm bg-gradient-success">{{__('Accepted')}}</span>
                            @elseif ($order->order_status == 'rejected')
                                <span class="badge badge-sm bg-gradient-danger">{{__('Rejected')}}</span>
                            @elseif ($order->order_status == 'delivered')
                                <span class="badge badge-sm bg-gradient-info">{{__('Delivered')}}</span>
                            @elseif ($order->order_status == 'canceled')
                                <span class="badge badge-sm bg-gradient-danger">{{__('Canceled')}}</span>
                            @elseif ($order->order_status == 'received')
                                <span class="badge badge-sm bg-gradient-info">{{__('Received')}}</span>
                            @elseif ($order->order_status == 'on_way')
                                <span class="badge badge-sm bg-gradient-info">{{__('On Way')}}</span>
                            @elseif ($order->order_status == 'preparing')
                                <span class="badge badge-sm bg-gradient-info">{{__('Preparing')}}</span>
                            @elseif ($order->order_status == 'ready')
                                <span class="badge badge-sm bg-gradient-info">{{__('Ready')}}</span>


                            @else 
                                <span class="badge badge-sm bg-gradient-success">Online</span>

                            @endif
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                {{$order->created_at->diffForHumans()}}
                            </span>
                          </td>
                          <td class="align-middle">
                           <!--dropdown action menue -->
                           <div class="dropdown show">
                            <a class="btn btn-secondary btn-sm  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('Action')}}
                            </a>
                          
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          
                                <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'preparing')">
                                        {{__('Preparing')}}
                                    </a>
                                    <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'ready')">
                                        {{__('Ready')}}
                                    </a>
                               




                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div> 



                          </td>
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                    <div> 
                      
                      </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

        <!--orders-->



    </div>
</div>
</div>
    <!-- modal to logo and cover [logo,cover]-->


  