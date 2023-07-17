<header class="container">
    <div class="py-3">

       <h1 class="inverted-7 d-inline-block">
        مطعم
         <span class="menu-heading-color">
        {{$restaurant->name_ar}}
         </span></h1>
    </div>
</header>

<section id="menu" class="menu">
    <div class="container border py-5">

        <div class="section-title">
            <h2>قائمة <span>الوجبات</span></h2>
        </div>

        <div class="row menu-container">
            @foreach ($restaurant->sections as $category) 
            <div class="col-md-6 mb-5">
                <h5 class="menu-category  p-2" style="background: {{$category->color}} !important">
                  {{$category->name_ar}}
                </h5>
                @foreach ($category->products as $product)
                <div class="menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#" style="color:{{$category->color}}">{{$product->name_ar}}</a><span>{{$product->price}} </span>
                    </div>
                    <div class="menu-ingredients">
                        {{$product->description_ar}}
                    </div>
                </div>
                @endforeach



            </div>
            @endforeach
            

        </div>

    </div>
</section><!-- End Menu Section -->