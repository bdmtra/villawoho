<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Villa WoHo, rent apartment in Menton</title>
    <meta charset="utf-8">
    <meta name="description" content="rent apartment for your stay in Menton">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="villa WoHo">
    <meta name="googlebot" content="index" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="/frontend/css/animate.css">

    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">

    <link rel="stylesheet" href="/frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/frontend/css/jquery.timepicker.css">

    <link rel="stylesheet" href="/frontend/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    @yield('script.head')
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+33  (0)767000795</a> or <span class="mailus">email us:</span> <a href="#">info@villawoho.com</a></p>
                @if (!Auth::guest())
                    <a href="{{ route('user.booking_history') }}" class="mx-4 text-white">Dashboard</a>
                @endif
            </div>
            <div class="col d-flex justify-content-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">


                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Villa<span>WoHo</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(Route::is('home') ) active @endif"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item @if(Route::is('calendar') ) active @endif"><a href="{{ route('calendar') }}" class="nav-link">Calender booking</a></li>
                <li class="nav-item @if(Route::is('contact') ) active @endif"><a href="{{ route('contact') }}" class="nav-link">Getting here</a></li>
                <li class="nav-item @if(Route::is('rooms') ) active @endif"><a href="{{ route('rooms') }}" class="nav-link">Apartments to rent</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <p class="copyright mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</div>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/frontend/js/popper.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.easing.1.3.js"></script>
<script src="/frontend/js/jquery.waypoints.min.js"></script>
<script src="/frontend/js/jquery.stellar.min.js"></script>
<script src="/frontend/js/jquery.animateNumber.min.js"></script>
<script src="/frontend/js/bootstrap-datepicker.js"></script>
<script src="/frontend/js/jquery.timepicker.min.js"></script>
<script src="/frontend/js/owl.carousel.min.js"></script>
<script src="/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="/frontend/js/scrollax.min.js"></script>
<script src="/frontend/js/main.js"></script>
@yield('script.body')
</body>
</html>
