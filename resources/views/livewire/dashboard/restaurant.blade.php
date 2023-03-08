@php
    use Illuminate\Support\Str;
function excerpt($string, $limit = 100)
{
    return Str::limit($string, $limit);
}
@endphp

<div>
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Restaurants</h6>
                <p class="text-sm">  Your restaurants</p>
            </div>
            <div class="card-body p-3">
                <div class="row">
                  
                    @foreach ($restaurants as $restaurant)
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 pt-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl"> 
                                   <!-- <img src="{{ asset('storage/'.$restaurant->image) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"> -->
                                    <img src="{{ $restaurant->logo }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">Restaurant #{{ $restaurant->id }}
                                     </p>
                                <a href="javascript:;">
                                    <h5>
                                        {{ $restaurant->name_ar }}
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    {{ excerpt($restaurant->description_ar, 50) }}
                                       
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a type="button" href="/dashboard/restaurant/{{ $restaurant->id }}"
                                     class="btn btn-outline-primary btn-sm mb-0">View
                                    </a>
                                    <div class="avatar-group mt-2">
                                       @foreach ( $restaurant->categories as $category)
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                                            <!--<img alt="Image placeholder" src="{{ asset('storage/'.$category->image) }}"> -->
                                            <img alt="Image placeholder" src="{{$category->image }}">
                                        </a>
                                        @endforeach
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    @endforeach
                   
                
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 pt-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="javascript:;">
                                    <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                                    <h5 class=" text-secondary"> New project </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
