<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('beranda')}}">WOPONTA NTUN<span>Homestay</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{route('beranda')}}" class="nav-link">Beranda</a></li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kamar
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('index_kamar')}}">Detail</a>
                <a class="dropdown-item" href="{{route('fasilitas_kamar')}}">Fasilitas</a>
                <a class="dropdown-item" href="{{route('harga_kamar')}}">Harga</a>
              </div>
            </li>

	          <li class="nav-item {{ Request::is('galeri') ? 'active' : '' }}"><a href="{{route('galeri')}}" class="nav-link">Galeri</a></li>
            <li class="nav-item {{ Request::is('profil') ? 'active' : '' }}"><a href="{{route('profil')}}" class="nav-link">Profil</a></li>
            <li class="nav-item {{ Request::is('fasilitas-home-stay') ? 'active' : '' }}"><a href="{{route('fasilitas_home_stay')}}" class="nav-link">Fasilitas</a></li>
	          <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}"><a href="{{route('kontak')}}" class="nav-link">Kontak</a></li>
	          <li class="nav-item cta "><a href="{{route('paket_wisata')}}" class="nav-link">Paket Wisata</a></li>

          </ul>
          
        </div>
       @auth
        <div class="p-2 bd-highlight ml-4">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger rounded-pill">
            <i class="zmdi zmdi-power"></i>Keluar
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>                     
        </div>
       @endauth
        
	    </div>
	  </nav>
    <!-- END nav -->
    
    <style>
      .tekstengahbawah{
        margin-top: 50%; 
        color:white;
      }
      
    </style>


    @yield('content')

    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Woponta Ntun Homestay</h2>
              <p>Memberikan rasa aman dan nyaman. Pengalaman tak terlupakan.</p>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('index_kamar')}}" class="py-2 d-block">Detail Kamar</a></li>
                <li><a href="{{route('fasilitas_kamar')}}" class="py-2 d-block">Fasilitas Kamar</a></li>
                <li><a href="{{route('harga_kamar')}}" class="py-2 d-block">Harga Kamar</a></li>
                <li><a href="{{route('galeri')}}" class="py-2 d-block">Geleri Wisata</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Navigasi</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('beranda')}}" class="py-2 d-block">Beranda</a></li>
                <li><a href="{{route('galeri')}}" class="py-2 d-block">Galeri</a></li>
                <li><a href="{{route('profil')}}" class="py-2 d-block">Profil</a></li>
                <li><a href="{{route('fasilitas_home_stay')}}" class="py-2 d-block">Fasilitas</a></li>
                <li><a href="{{route('kontak')}}" class="py-2 d-block">Kontak</a></li>
                <li><a href="{{route('paket_wisata')}}" class="py-2 d-block">Paket Wisata</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Punya Pertanyaan ?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Kampung Folley, Distrik Misool Timur, Kabupaten Raja Ampat, Papua Barat</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0812 4002 0550</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">wopontantun@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; Woponta Ntun Homestay 2020
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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