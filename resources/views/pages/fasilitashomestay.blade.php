@extends('layouts.master')
<title>Fasilitas</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('keren.jpg') }}');" data-stellar-background-ratio="0.5">
      
    </section>

    <section class="ftco-section services-section bg-light">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
                <h2 class="mb-4">Fasilitas di Manta Homestay meliputi:</h2>
                <ul>
                    <li>1 Barracks (4 rooms)</li>
                    <li>3 Bungalows</li>
                    <li>1 Restaurant</li>
                    <li>1 Kitchen</li>
                    <li>2 Bathrooms</li>
                    <li>2 Toilets</li>
                </ul>
                <h2 class="mb-4">Selain itu juga disertakan:</h2>
                <ul>
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
                        <div class="icon"><span class="flaticon-paragliding"></span></div>
                        <div class="media-body">
                          <h3 class="heading mb-3">Activities</h3>
                          <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                        </div>
                      </div>      
                    </div>
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                      <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-route"></span></div>
                        <div class="media-body">
                          <h3 class="heading mb-3">Travel Arrangements</h3>
                          <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                        </div>
                      </div>    
                    </div>
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                      <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-tour-guide"></span></div>
                        <div class="media-body">
                          <h3 class="heading mb-3">Private Guide</h3>
                          <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                        </div>
                      </div>      
                    </div>
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                      <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-map"></span></div>
                        <div class="media-body">
                          <h3 class="heading mb-3">Location Manager</h3>
                          <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                        </div>
                      </div>      
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>

@endsection