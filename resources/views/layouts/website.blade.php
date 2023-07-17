<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title> {{ config('app.name') }} </title>
    <meta name="description" content="" />
    
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <!-- <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1" rel="stylesheet" /> -->
    <link id="pagestyle" href="{{asset('assets/css/style-rtl.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/website.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/spacing.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/index-d0d29235.css">

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
</head>

<body>
    
   
    <!-- End Header Area -->

    {{ $slot }}
    
   

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    
    @livewireScripts
    <script src="/assets/js/core/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
    <!-- use only on /,/delivery,/checkout pages -->
    @if (
        
        request()->is('/') ||
        request()->is('delivery') ||
        request()->is('checkout')
    )
                <script type="module" crossorigin src="/assets/js/index-c73f16d3.js"></script>

    @endif

</body>
</html>