<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Hotel Del Luna | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/sona/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sona/style.css') }}">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/agency/agency.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agency/vendor/bootstrap/css/bootstrap.min.css') }}"> 
    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/hoteldelluna/home-pelanggan">Hotel Del Luna</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href=/hoteldelluna/home-pelanggan-room >The Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/upload/moment">The Moment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Js Plugins -->
    <script rel="stylesheet" src="{{ asset('js/sona/jquery-3.3.1.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/sona/bootstrap.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/sona/jquery.magnific-popup.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/sona/jquery.nice-select.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/sona/jquery-ui.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/sona/jquery.slicknav.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/sona/owl.carousel.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/sona/main.js') }}"></script>

    <!-- ini JS nya -->
    <!-- <script rel="stylesheet" src="{{ asset('js/agency/agency.js') }}"></script> -->
    <script rel="stylesheet" src="{{ asset('js/agency/agency.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/agency/contact_me.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('js/agency/jqBootstrapValidation.js') }}"></script>

<!-- tak komen soale udah di import dari punyae sona, jadi gaperlu membebani web :)) -->
    <!-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> -->
    <!-- <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-easing/jquery.easing.compatibility.js')}}"></script>

    @yield('script')

</body>
</html>