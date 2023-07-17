  <footer class="footer main-footer p-5">
      <div class="container">
          <div class="row">

              <div class="col-12 text-center">
                Designed with ♡ by 
                <a href="https://litcode-it.com">Litcode</a>
              </div>
          </div>

      </div>
      </div>
  </footer>

<style>



.nav {
    display: flex;
    flex-direction: row;
    width: 375px;
    margin: auto;
    background-color: #fff;
    padding: 25px 20px;
    border-bottom-left-radius: 30px; 
    border-bottom-right-radius: 30px; 
    box-shadow: 0px 5px 40px rgba(0,0,0,0.8);
    position: fixed;
    bottom: 0;
    width: 100%;
}

.nav-item {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
    padding: 10px 15px;
    cursor: pointer;
    transition: all 0.2s ease-out;
}

.nav-text {
    font-size: 20px;
    margin: auto;
    text-align: center;
    font-weight: 500;
    display: none;
    transition: all 0.3s ease;
}

.material-icons {
    display: inline;
    font-size: 32px;
    transition: color .3s;
}

.nav-item.active {
    flex-grow: 3;
    border-radius: 30px;
    background: #eee;
    justify-content: flex-start;
}

.nav-item.active > .nav-text {
    display: inline-block;
}

.nav-item.active > .material-icons.home-icon {
    color: #5a35b5;
}

.material-icons.home-icon ~ .nav-text {
    color: #5a35b5;
}

.nav-item.active > .material-icons.favorite-icon {
    color: #c9329a;
}

.material-icons.favorite-icon ~ .nav-text {
    color: #c9329a;
}

.nav-item.active > .material-icons.search-icon {
    color: #e5a023;
}

.material-icons.search-icon ~ .nav-text {
    color: #e5a023;
}

.nav-item.active > .material-icons.person-icon {
    color: #0091a9;
}

.material-icons.person-icon ~ .nav-text {
    color: #0091a9;
}
.cart-count {
    position: absolute;
    top: 0;
    background: #e5a023;
    color: #fff;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 500;
    margin-top: -10px;
    margin-right: -10px;
    box-shadow: 0px 5px 40px rgba(0,0,0,0.8);
    transition: all 0.3s ease;
}



  </style>



  <div class="nav">
    <div class="nav-item">
        <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>

        <span class="nav-text">
          {{ __('Restaurants') }}
        </span>
          
     </div>
    <div class="nav-item">
        <i class= "ni ni-favourite-28 text-lg opacity-10" aria-hidden="true"></i>
        <span class="nav-text">
          {{ __('Home') }}
        </span>
    </div>
    <div class="nav-item">
        <i class="ni ni-basket text-lg opacity-10" aria-hidden="true"></i>
        <span class="nav-text"> 
          {{ __('Cart') }}
        </span>

        <!-- add the cart count -->
        <span class="cart-count">
            @if(session()->has('cart'))
                {{ count(session()->get('cart')) }}
            @else
                0
            @endif
        </span>


        

        
    </div>
    <div class="nav-item">
      <!--orders -->
      <i class="ni ni-bullet-list-67 text-lg opacity-10" aria-hidden="true"></i>
      
        <span class="nav-text">
          {{ __('Orders') }}
        </span>
    </div>

    <div class="nav-item">
       <!-- search -->
       <i class="ni ni-zoom-split-in text-lg opacity-10" aria-hidden="true"></i>
        <span class="nav-text">
          {{ __('Search') }}
        </span>
    </div>

  </div>

  <script>
    //after page load  
    window.addEventListener('load', function(){
        //if the user is not logged in hide the profile icon
      
    //active link based on the page url [main, favorite, cart, profile,restaurants]
    const url = window.location.href;

    if(url.includes('restaurant')){
        document.querySelector('.nav .nav-item:nth-child(1)').classList.add('active');
    }else if(url.includes('main')){
        document.querySelector('.nav-item:nth-child(2)').classList.add('active');
    }else if(url.includes('cart')){
        document.querySelector('.nav-item:nth-child(3)').classList.add('active');

    }else if(url.includes('orders')){
        document.querySelector('.nav-item:nth-child(4)').classList.add('active');
    }else if(url.includes('search')){
        document.querySelector('.nav-item:nth-child(5)').classList.add('active');
    }



    const nav = document.querySelectorAll('.nav-item');
    //remove first element from the nav array
    

    function activeLink(){
        nav.forEach(n => n.classList.remove('active'));
        this.classList.add('active');
    }

    nav.forEach(n => n.addEventListener('click', activeLink));
    //if search is clicked go to the search input in the header
    nav[5].addEventListener('click', function(){
        document.getElementById('search').focus();
        //scroll to top
        window.scrollTo(0, 0);
    });
    //if cart is clicked go to the cart page
    nav[3].addEventListener('click', function(){
        window.location.href = "/cart";
    });
    //if restaurants is clicked go to the restaurants page
    nav[1].addEventListener('click', function(){
        window.location.href = "/restaurants";
    });
    //if orders is clicked go to the orders page
    nav[4].addEventListener('click', function(){
        window.location.href = "/orders";
    });
    //if main is clicked go to the main page
    nav[2].addEventListener('click', function(){
        window.location.href = "/main";
    });
  });

  </script>

