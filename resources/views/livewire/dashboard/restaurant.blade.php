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
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="{{$category->name_ar}}">
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
                                <!-- togle modal -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#restaurantModal">
                                    <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                                    <h5 class=" text-secondary"> New Restaurant </h5>
                                </a>
                            </div>
                              <!-- Modal with fields [ 'name_ar', 'name_en', 'description_ar', 'description_en', 'phone', 'whatsapp', 'email', 'address_ar', 'address_en', 'logo', 'cover', 'status','slogan_ar', 'slogan_en', 'facebook', 'twitter', 'instagram', 'youtube', 'snapchat', 'telegram', 'tiktok'] -->
  <div class="modal fade" id="restaurantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Restaurant</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="store">
            <div class="mb-3">
              <label for="name_ar" class="col-form-label">Name Ar:</label>
              <input type="text" class="form-control" id="name_ar" wire:model="name_ar">
              @error('name_ar') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="name_en" class="col-form-label">Name En:</label>
              <input type="text" class="form-control" id="name_en" wire:model="name_en">
              @error('name_en') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="description_ar" class="col-form-label">Description Ar:</label>
              <textarea class="form-control" id="description_ar" wire:model="description_ar"></textarea>
              @error('description_ar') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="description_en" class="col-form-label">Description En:</label>
              <textarea class="form-control" id="description_en" wire:model="description_en"></textarea>
              @error('description_en') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="phone" class="col-form-label">Phone:</label>
              <input type="text" class="form-control" id="phone" wire:model="phone">
              @error('phone') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="whatsapp" class="col-form-label">Whatsapp:</label>
                <input type="text" class="form-control" id="whatsapp" wire:model="whatsapp">
                @error('whatsapp') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="email" wire:model="email">
              @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="address_ar" class="col-form-label">Address Ar:</label>
              <input type="text" class="form-control" id="address_ar" wire:model="address_ar">
              @error('address_ar') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="address_en" class="col-form-label">Address En:</label>
              <input type="text" class="form-control" id="address_en" wire:model="address_en">
              @error('address_en') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="logo" class="col-form-label">Logo:</label>
              <input type="file" class="form-control" id="logo" wire:model="logo">
              @error('logo') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="cover" class="col-form-label">Cover:</label>
              <input type="file" class="form-control" id="cover" wire:model="cover">
              @error('cover') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="status" class="col-form-label">Status:</label>
              <select class="form-control" id="status" wire:model="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
              @error('status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="slogan_ar" class="col-form-label">Slogan Ar:</label>
              <input type="text" class="form-control" id="slogan_ar" wire:model="slogan_ar">
              @error('slogan_ar') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="slogan_en" class="col-form-label">Slogan En:</label>
              <input type="text" class="form-control" id="slogan_en" wire:model="slogan_en">
              @error('slogan_en') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="facebook" class="col-form-label">Facebook:</label>
              <input type="text" class="form-control" id="facebook" wire:model="facebook">
              @error('facebook') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="twitter" class="col-form-label">Twitter:</label>
              <input type="text" class="form-control" id="twitter" wire:model="twitter">
              @error('twitter') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="instagram" class="col-form-label">Instagram:</label>
              <input type="text" class="form-control" id="instagram" wire:model="instagram">
              @error('instagram') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="youtube" class="col-form-label">Youtube:</label>
              <input type="text" class="form-control" id="youtube" wire:model="youtube">
              @error('youtube') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="snapchat" class="col-form-label">Snapchat:</label>
              <input type="text" class="form-control" id="snapchat" wire:model="snapchat">
              @error('snapchat') <span class="error">{{ $message }}</span> @enderror
            </div>
        
          
            <div class="mb-3">
              <label for="tiktok" class="col-form-label">Tiktok:</label>
              <input type="text" class="form-control" id="tiktok" wire:model="tiktok">
              @error('tiktok') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
              <label for="telegram" class="col-form-label">Telegram:</label>
              <input type="text" class="form-control" id="telegram" wire:model="telegram">
              @error('telegram') <span class="error">{{ $message }}</span> @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save changes</button>
        </div>
        </div>
        </div>
        </div>
        <!-- End Modal -->
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

