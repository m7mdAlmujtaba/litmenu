

<main class="main-content mt-1 border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
           
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-center " id="navbar">
                <div class=" align-items-center p-3">
                  <img src="{{ asset('assets/img/shop-logo.png') }}" alt="" class="w-50">
                </div>
                <div class="ms-md-3 pe-md-3 col-8 align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" id="search" class="form-control" placeholder="Type here..." wire:model="search">
                    </div>
                </div>

                <!--add location button-->
                <div class="ms-md-3 pe-md-3  align-items-center">
                    <div class="input-group">
                        <a href="" class="nav-link  color-black" >
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>



                <ul class="navbar-nav justify-content-end">
                  
                     
           
                    <li class="nav-item dropdown  d-flex align-items-center p-3">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Rounded-Icons"
                                                        transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="credit-card"
                                                                transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    id="Path" opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                                                                    id="Shape"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



<main class="main-content position-relative h-100 border-radius-lg">
    




    
@if ($is_single_order)

<div class="container-fluid py-4">
    <div class="row flex justify-content-between align-items-center">
            <button class="btn btn-sm btn-primary" wire:click="back()">{{__('Back')}}</button>


    </div>

   

   

    <div class="row">
        <table>
         
            <tbody>
                <tr>
                    <td>
                        <h1 class="text-center p-1"
                        >{{__('Order')}} #{{$order->id}}</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text-center p-1"
                        >{{$order->restaurant->name_ar}}</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 class="text-center p-1"
                        >{{$order->restaurant->address_ar}}</h5>
                    </td>
                </tr>
                <tr>
                @php
                    $order_items = json_decode($order->order_content,true);
                @endphp
                <table class="table table-striped p-1">
                    <thead>
                        <tr>
                            <th>{{__('Item')}}</th>
                            <th>{{__('Quantity')}}</th>
                            <th>{{__('Price')}}</th>
                            <th>{{__('Total')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_items as $item)
                        <tr>
                            <td>{{$item['name_ar']}}</td>
                            <td>{{$item['quantity']}}</td>
                            <td>{{$item['price']}}</td>
                            <td>{{$item['total']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </tr>

                <tr>
                    <td>
                        <h5 class="text-center p-1"
                        >{{__('Delivery Fees')}} : {{$order->delivery_price}}</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 class="text-center p-1"
                        >{{__('Order Price')}} : {{$order->order_price}}</h5>
                    </td>



                <tr>
                    <td>
                        <h5 class="text-center p-1"
                        >{{__('Total')}} : {{$order->total}}</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1 class="text-center p-1">
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
                        @elseif ($order->order_status == 'recieved')
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
                        </h1>
                    </td>
                </tr>

               
            </tbody>
        </table>
    

            @if ($order->order_status == 'delivered')
            <button class="btn btn-sm btn-info" wire:click="change_order_status('recieved')">
                {{__('Received')}}
            </button>
            @endif


            <!--rate order restaurant and delivery if order status is recieved-->
            @if ($order->order_status == 'recieved')

                 <!--rate order restaurant and delivery if order status is recieved-->
           <style>
            .container-wrapper {
                 background-color: #edf0f9;
            }
            
             .rating-wrapper {
                 align-self: center;
                 box-shadow: 7px 7px 25px rgba(198, 206, 237, .7), -7px -7px 35px rgba(255, 255, 255, .7), inset 0px 0px 4px rgba(255, 255, 255, .9), inset 7px 7px 15px rgba(198, 206, 237, .8);
                 border-radius: 5rem;
                 display: inline-flex;
                 direction: rtl !important;
                 padding: 1.5rem 2.5rem;
                 margin-left: auto;
            }
             .rating-wrapper label {
                 color: #e1e6f6;
                 cursor: pointer;
                 display: inline-flex;
                 font-size: 3rem;
                 padding: 1rem 0.6rem;
                 transition: color 0.5s;
            }
             .rating-wrapper svg {
                 -webkit-text-fill-color: transparent;
                 -webkit-filter: drop-shadow 4px 1px 6px rgba(198, 206, 237, 1);
                 filter: drop-shadow(5px 1px 3px rgba(198, 206, 237, 1));
            }
             .rating-wrapper input {
                 height: 100%;
                 width: 100%;
            }
             .rating-wrapper input {
                 display: none;
            }
             .rating-wrapper label:hover, .rating-wrapper label:hover ~ label, .rating-wrapper input:checked ~ label {
                 color: #34ac9e;
            }
             .rating-wrapper label:hover, .rating-wrapper label:hover ~ label, .rating-wrapper input:checked ~ label {
                 color: #34ac9e;
            }
             
            
                        </style>
                      
                            <h5 class="text-center p-1">{{__('Rate Restaurant')}}</h5>
            
                                <!-- star rating -->
                                <div class="rating-wrapper">
                                    <form>
                                  
                                  <!-- star 5 -->
                                  <input type="radio" id="5-star-rating" name="star-rating" value="5" wire:model="restaurant_rating">
                                  <label for="5-star-rating" class="star-rating">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                   <!-- star 4 -->
                                  <input type="radio" id="4-star-rating" name="star-rating" value="4" wire:model="restaurant_rating">
                                  <label for="4-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                   <!-- star 3 -->
                                  <input type="radio" id="3-star-rating" name="star-rating" value="3" wire:model="restaurant_rating">
                                  <label for="3-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                  <!-- star 2 -->
                                  <input type="radio" id="2-star-rating" name="star-rating" value="2" wire:model="restaurant_rating">
                                  <label for="2-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                  <!-- star 1 -->
                                  <input type="radio" id="1-star-rating" name="star-rating" value="1" wire:model="restaurant_rating">
                                  <label for="1-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                    </form>
            
                                  
                                 </div>
            
                                 <!-- star rating -->
                                 <h5 class="text-center p-1">{{__('Rate Delivery')}}</h5>
                                <div class="rating-wrapper">
                                  <form>
                                  
                                  <!-- star 5 -->
                                  <input type="radio" id="5-star-ratingd" name="star-ratingd" value="5" wire:model="delivery_rating">
                                  <label for="5-star-ratingd" class="star-rating">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                   <!-- star 4 -->
                                  <input type="radio" id="4-star-ratingd" name="star-ratingd" value="4" wire:model="delivery_rating">
                                  <label for="4-star-ratingd" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                   <!-- star 3 -->
                                  <input type="radio" id="3-star-ratingd" name="star-ratingd" value="3" wire:model="delivery_rating">
                                  <label for="3-star-ratingd" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                  <!-- star 2 -->
                                  <input type="radio" id="2-star-ratingd" name="star-ratingd" value="2" wire:model="delivery_rating">
                                  <label for="2-star-ratingd" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                  
                                  <!-- star 1 -->
                                  <input type="radio" id="1-star-ratingd" name="star-ratingd" value="1" wire:model="delivery_rating">
                                  <label for="1-star-ratingd" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                  </label>
                                    </form>
            
                                  
                                 </div>
            
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{__('Comment')}}</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="comment"></textarea>
                                  
            
                                </div>
                                          @error('comment')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror    
                                            <br>
                                            @error('restaurant_rating')
                                                <span class="text-danger">{{$message}}</span>
                                                
                                            @enderror
                                            <br>
                                            @error('delivery_rating')
                                                <span class="text-danger">{{$message}}</span>
            
                                            @enderror
                                            @error('order_id')
                                                <span class="text-danger">
                                                {{__('This order has been rated before')}}   
                                                </span>
            
                                            @enderror
                                                
                                            <br>
                                            @if (session()->has('message'))
                                                <span class="text-success">{{session('message')}}</span>
                                            @endif
            
            
                                    <button class="btn btn-primary" wire:click="rate_order({{$order->id}})">{{__('Rate Order')}}</button>
            
                 
                                    
            
                        <!--rate order restaurant and delivery if order status is recieved-->
            

            @endif


       


            
    <button class="btn btn-sm btn-primary" onclick="window.print()">{{__('Print')}}</button>



    </div>
</div>


  
    
@else
    


    <div class="container-fluid py-4">
   

    <div class="row">
        <h1 class="text-center p-1"
        >{{__('My Orders')}}</h1>

        @foreach ($orders as $order)
      
        <div class="col-xl-12   col-md-12 col-lg-12 mb-4 p-1">
            <a href="javascript:;" wire:click="set_order_id({{$order->id}})" >

            <div class="card">
            <div class="card-body p-3">
                <div class="row">
                <div class="col-8">
                    <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">
                        {{__('Order')}} #{{$order->id}}
                    </p>
                    <h5 class="font-weight-bolder mb-0">
                        {{$order->restaurant->name_ar}}
                
                      
                        
                        
                       
                    </h5>
                     <span class="text-success text-sm font-weight-bolder">
                          {{__('Total')}} :  {{$order->total}} {{__('YR')}}

                                            
                        </span>
                        <br>
                        <span class="text-info text-sm font-weight-bolder">
                          
                            {{$order->created_at->diffForHumans()}} 
                        </span>
                        
                    </div>
                   
                </div>
                <div class="col-4 justify-content-center align-items-center d-flex">
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
                                @elseif ($order->order_status == 'recieved')
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
                   
                  
                </div>
                



            
                </div>
            </div>
               
            </a>

            </div>
        </div> 


            
        @endforeach



    </div>
      
    </div>


    @endif

   

</main>


 <!-- Start Footer Area -->
 @include('layouts.footers.guest.main')
 <!--/ End Footer Area -->