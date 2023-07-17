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
                        <a href="/" class="nav-link  color-black" >
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
    



    



    <div class="container-fluid py-4">
    <div class="row" >
        <!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
background-image: url('/assets/img/hero-food.jpg');
height: 400px;
">
<div class="" style="background-color: rgba(0, 0, 0, 0.6);">
<div class="d-flex justify-content-center align-items-center">
  <div class="text-white" style="color: white !important;">
    <h1 class="mb-3 text-white">
        {{__('Salaty')}}
    </h1>
    <h4 class="mb-3 text-white">
        {{__('Order food from your favorite restaurant and enjoy delicious meals')}}
    </h4>
    <a class="btn btn-outline-light btn-lg" href="#!" role="button">
        
        {{__('Order Now')}}
    </a>
  </div>
</div>
</div>
</div>
<!-- Hero -->
      
    </div>

    <div class="row">
        <h1 class="text-center p-3"
        >{{__('Offers')}}</h1>
        @foreach ($offers as $offer)
        <div class="col-xl-3   col-md-6 col-lg-3 mb-4 p-1">
            <div class="card">
            <div class="card-body p-3">
                <div class="row">
                <div class="col-8">
                    <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">
                      
                        <h5>
                        {{$offer->name_ar}}
                        </h5>

                          {{$offer->restaurant->name_ar}}
                    </p>
                    <h5 class="font-weight-bolder mb-0">

                        {{$offer->price}} {{__('YR')}}  
                        <br>
                        
                        
                        <span class="text-success text-sm font-weight-bolder">
                                                  {{$offer->discount}}%  
                        </span>
                    </h5>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="icon icon-shape shadow text-center border-radius-md justify-content-center align-items-center ">
                        <img src="{{$offer->image}}" class=" "
                        width="100%" height="100% " style=" object-fit: cover;">
                    </div>
                </div>
                </div>
            </div>
            <a href="/restaurant/{{$offer->restaurant->id }}"  class="stretched-link"></a>
            </div>
        </div> 


            
        @endforeach


    </div>
      <div class="row">
        <h1 class="text-center p-3"
        >{{__('Restaurants Near You')}}</h1>



        @foreach($restaurants as $restaurant)
        
        <div class="col-xl-3   col-md-6 col-lg-3 mb-4 p-1">
                    <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">
                                  
                                 
                                  {{$restaurant->address_ar}}
                               
                            </p>
                            <h5 class="font-weight-bolder mb-0">
                                
                                 {{$restaurant->name_ar}}
                                
                                
                            </h5><span class="text-success text-sm font-weight-bolder">
                                {{$restaurant->distance}} {{__('Km')}}
                            </span>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow text-center border-radius-md justify-content-center align-items-center ">
                                <img src="{{$restaurant->logo}}" class=" "
                                width="100%" height="100% " style=" object-fit: cover;">
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="/restaurant/{{$restaurant->id}}"  class="stretched-link"></a>
                    </div>
                </div> 

                
        @endforeach
        
    @foreach($categories as $category)
     <h1  class="text-center p-1"
      >   {{__('Category')}} {{$category->name_ar}} </h1> 

          @foreach($category->products as $product)
       
         <div class="col-xl-3   mb-xl-0 mb-4 p-1 col-md-6 col-lg-3">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">
                          {{$product->restaurant->name_ar}}
                      </p>
                      <h5 class="font-weight-bolder mb-0">
                     
                         
                         {{$product->name_ar}}
                       
                      </h5> <span class="text-success text-sm font-weight-bolder">
                        {{$product->price}} {{__('YR')}}
                        </span>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape  shadow text-center border-radius-md justify-content-center align-items-center object-fit">
                      
                        <img src="{{$category->image}}" class=" "
                        width="100%" height="100% " style=" object-fit: cover;">
                        
                    </div>
                  </div>
                </div>
              </div>
                <a href="{{$category->logo}}"  class="stretched-link"></a>
            </div>
          </div>
          @endforeach
        @endforeach
      

       
      
      </div>
    </div>
</main>


 <!-- Start Footer Area -->
 @include('layouts.footers.guest.main')
 <!--/ End Footer Area -->