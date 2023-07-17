<div>
    <div class="row">
        <div class="col-12">
            
            <div class="card mb-4" wire:ignore>
                <div id="map" style="height: 80vh ;width:100%;padding:0;margin:0;"></div>
            </div>
        </div>
        

    </div>
    <div class="row">
        <input id="latitude" type="hidden" placeholder="Latitude" wire:model="latitude"  />
        @error('latitude')
            <span class="error">{{ $message }}</span> 
            
        @enderror
        <input id="longitude" type="hidden" placeholder="Longitude" wire:model="longitude" />
        @error('longitude')
            <span class="error">{{ $message }}</span>
            
        @enderror
          

            <div class="col-8 justify-content-center" >
                <a href="javascript:;"    class="btn btn-secondary" wire:click="acceptlocation()" style="width: 80%" disabled >{{__('Accept location')}}</a> 
        </div>
        <div class="col-4 justify-content-center" >
          <input type="checkbox" id="show-position" /> <label for="show-position">
                {{__('GPS Position')}}
          </label>
        </div>
      
    </div>
   
   
</div>

<script>
    var lon = document.getElementById('longitude').value;
    var lat = document.getElementById('latitude').value;
    document.getElementById('show-position').addEventListener('change', function() {
    if (this.checked) {
      // every 1 seconds
      timer = setInterval(function() {
        update_lonlat();
      }, 3000);



    } else {
        clearInterval(timer);
    }
});
function update_lonlat() {
    //check if lon or lat is changed

    if (lon != document.getElementById('longitude').value || lat != document.getElementById('latitude').value) {
        //update lon and lat
        lon = document.getElementById('longitude').value;
        lat = document.getElementById('latitude').value;
        //update location
        @this.set('latitude', document.getElementById('latitude').value);
        @this.set('longitude', document.getElementById('longitude').value);
    }

   
 
}
</script>