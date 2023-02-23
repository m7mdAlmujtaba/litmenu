<nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-relative my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid">
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-2 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">
                            <i class="fa fa-home opacity-6 me-1"></i>
                            الرئيسية
                        </a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav d-lg-block d-none">
                    @if (auth()->user())
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">لوحة التحكم</a>
                    </li>
                    @else 
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">الدخول</a>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>