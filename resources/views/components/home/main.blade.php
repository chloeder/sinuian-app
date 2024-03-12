<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>{{ env('APP_NAME') }}</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/jquery.bxslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/magnific-popup.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/owl.theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/ticker-style.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/css/style.css" media="screen">
    <link href="{{ asset('assets/plugins/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/owl-carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/animate-css/animate.min.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- Container -->
    <div id="container">

        <!-- Header
  ================================================== -->
        @include('layout.home.home-header')
        <!-- End Header -->

        @yield('content')

        <!-- footer
================================================== -->
        @include('layout.home.home-footer')
        <!-- End footer -->

    </div>
    <!-- End Container -->

    <script type="text/javascript" src="{{ asset('home') }}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/jquery.migrate.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/jquery.ticker.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/jquery.imagesloaded.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/sticky.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('home') }}/js/script.js"></script>
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>

</body>

</html>
