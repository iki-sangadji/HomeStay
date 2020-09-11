@extends('layouts.master')
<title>Fasilitas</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('Pulau Banoz.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4 tekstengahbawah">Fasilitas</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section bg-light">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
                <h2 class="mb-4">Fasilitas di Manta Homestay meliputi:</h2>
                <ul>
                    <li>1 Barracks (3 rooms)</li>
                    <li>3 Bungalows</li>
                    <li>1 Restaurant</li>
                    <li>1 Kitchen</li>
                    <li>2 Bathrooms</li>
                    <li>2 Toilets</li>
                    <li>Breakfast</li>
                    <li>Lunch</li>
                    <li>Dinner</li>
                    <li>Tea and Coffee</li>
                    <li>Milk and bread</li>
                </ul>                
              
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                      <div class="media block-6 services d-block">                        
                        <div class="media-body">
                            <img class="" src="{{ asset('1 barak.jpg') }}" alt="Trulli" width="545" height="400">     
                        </div>
                      </div>      
                    </div>
                   
                </div>
            </div>
          </div>
        </div>
      </section>

@endsection