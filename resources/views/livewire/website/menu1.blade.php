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
            @foreach ($restaurant->categories as $category) 
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
            <div class="col-md-6 mb-5">
                <h5 class="menu-category menu-heading-bg p-2">
                    البوفيه الرئيسي
                </h5>
                <div class="menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class=" menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Bread barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class=" menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Crab Cake</a><span>$7.95</span>
                    </div>
                    <div class="menu-ingredients">
                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                </div>

                <div class=" menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class=" menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <h5 class="menu-category menu-heading-bg p-2">
                    معجنات
                </h5>
                <div class="menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class=" menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Bread barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class=" menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class=" menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <h5 class="menu-category menu-heading-bg p-2">
                    الحلويات
                </h5>
                <div class="menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class=" menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Bread barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class=" menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Crab Cake</a><span>$7.95</span>
                    </div>
                    <div class="menu-ingredients">
                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                </div>

                <div class=" menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class=" menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>
            </div>


        </div>

    </div>
</section><!-- End Menu Section -->