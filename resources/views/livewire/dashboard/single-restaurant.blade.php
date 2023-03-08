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
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                role="tab" aria-controls="overview" aria-selected="true">
                                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)"
                                            fill="#FFFFFF" fill-rule="nonzero">
                                            <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                                <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                                                    <path class="color-background"
                                                        d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"
                                                        id="Path"></path>
                                                    <path class="color-background"
                                                        d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                        id="Path" opacity="0.7"></path>
                                                    <path class="color-background"
                                                        d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                        id="Path" opacity="0.7"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span class="ms-1">Overview</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                                aria-controls="teams" aria-selected="false">
                                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>document</title>
                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)"
                                            fill="#FFFFFF" fill-rule="nonzero">
                                            <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                                <g id="document" transform="translate(154.000000, 300.000000)">
                                                    <path class="color-background"
                                                        d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                        id="Path" opacity="0.603585379"></path>
                                                    <path class="color-background"
                                                        d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                                                        id="Shape"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span class="ms-1">Categories</span>
                            </a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                                aria-controls="projects" aria-selected="false">
                                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>box-3d-50</title>
                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)"
                                            fill="#FFFFFF" fill-rule="nonzero">
                                            <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                                <g id="box-3d-50" transform="translate(4.000000, 301.000000)">
                                                    <path class="color-background"
                                                        d="M36.3636364,40 L3.63636364,40 C1.62618182,40 0,38.3738182 0,36.3636364 L0,3.63636364 C0,1.62618182 1.62618182,0 3.63636364,0 L36.3636364,0 C38.3738182,0 40,1.62618182 40,3.63636364 L40,36.3636364 C40,38.3738182 38.3738182,40 36.3636364,40 Z"
                                                        id="Path" opacity="0.6"></path>
                                                    <path class="color-background"
                                                        d="M36.3636364,40 L3.63636364,40 C1.62618182,40 0,38.3738182 0,36.3636364 L0,3.63636364 C0,1.62618182 1.62618182,0 3.63636364,0 L36.3636364,0 C38.3738182,0 40,1.62618182 40,3.63636364 L40,36.3636364 C40,38.3738182 38.3738182,40 36.3636364,40 Z"
                                                        id="Path"></path>
                                                    <path class="color-background" d="M0,0 L40,0 L40,40 L0,40 L0,0 Z M4,4 L36,4 L36,36 L4,36 L4,4 Z"
                                                        id="Shape"></path>
                                                    <path class="color-background" d="M0,0 L40,0 L40,40 L0,40 L0,0 Z M4,4 L36,4 L36,36 L4,36 L4,4 Z"
                                                        id="Shape" opacity="0.3"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span class="ms-1">Products</span>
                            </a>
                        </li>



                                                


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Restaurant Settings</h6>
                </div>
                <div class="card-body p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault">Email me when someone follows me</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                            </div>
                        </li>
                    </ul>
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault3">New launches and projects</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault4">Monthly product updates</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0 pb-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Profile Information</h6>
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
                                Name:</strong> &nbsp; {{$restaurant->name_ar}}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong>
                            &nbsp; {{$restaurant->phone}}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                            &nbsp; {{$restaurant->email}}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong>
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
                    <h6 class="mb-0">Categories</h6>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        @foreach ($restaurant->categories as $category)
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="avatar me-3">
                                <img src="{{ $category->image}}" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $category->name_ar}}</h6>
                                <p class="mb-0 text-xs">
                                    {{ excerpt($category->description_ar, 20)}}
                                </p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Delete</a>
                        </li>

                        @endforeach
                      
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Products</h6>
                    <p class="text-sm">All Restaurant Meals </p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($restaurant->products as $product)
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
                                                <span class="text-secondary text-sm">{{ $product->category->name_ar}}</span>
                                            </td>
                                            <td>
                                                <a href=""
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Edit
                                                </a>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                                <!-- add new product -->
                                 <a href="{{}}" class="btn btn-primary">Add New Product</a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--change image modal -->
