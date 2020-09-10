<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vhomestay/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vhomestay/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('vhomestay/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vhomestay/css/owl.theme.default.min.css"') }}">
    <link rel="stylesheet" href="{{ asset('vhomestay/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('vhomestay/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('vhomestay/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vhomestay/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vhomestay/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('vhomestay/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vhomestay/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('vhomestay/css/style.css') }}">
</head>
<body>
  <style>
    .search-wrap-1 {
        margin-top: 20%;
    }
    .kuning{
        background-color: #f9ab30 ;
    }
    .putih{
        color: white;
    }
  </style>

        @yield('content')


    <script src="{{ asset('vhomestay/js/jquery.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/popper.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('vhomestay/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/aos.js') }}"></script>
  <script src="{{ asset('vhomestay/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('vhomestay/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('vhomestay/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('vhomestay/js/google-map.js') }}"></script>
  <script src="{{ asset('vhomestay/js/main.js') }}"></script>
</body>
</html>
