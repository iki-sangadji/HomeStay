@extends('layouts.master')
<title>Kontak</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('keren.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4 tekstengahbawah">Kontak</h2>
            </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-2">Alamat</h3>
	            <p>Kampung Folley, Distrik Misool Timur, Kabupaten Raja Ampat, Papua Barat</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-2">Kontak</h3>
	            <p><a href="tel://081240020550">0812 4002 0550</a></p>
	          </div>
          </div>          
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-whatsapp"></span>
          		</div>
          		<h3 class="mb-2">Whatsapp</h3>
	            <p><a href="#">0812 4002 0550</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-2">Alamat Email</h3>
	            <p><a href="mailto:wpontantun@gmail.com">wpontantun@gmail.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
			
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 d-flex">
            <img class="" src="{{ asset('welcome.jpg') }}" alt="Trulli" width="545" height="400">          
          </div>

          <div class="col-md-6 d-flex">
          	<img class="" src="{{ asset('viewmalam.jpg') }}" alt="Trulli" width="545" height="400">
          </div>
        </div>
      </div>
    </section>

@endsection