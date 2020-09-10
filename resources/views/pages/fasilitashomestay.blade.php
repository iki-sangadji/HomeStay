@extends('layouts.master')
<title>Fasilitas</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('keren.jpg') }}');" data-stellar-background-ratio="0.5">
      
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Paket Trip Wisata</h2>
            <p>Trip pada homestay waponta ntun hanya sekali jalan untuk beberapa tempat wisata.
                <br> Tarif trip sekali jalan : <b> 4.000.000</b>
            </p>
          </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url('{{ asset('Pulau Banoz.jpg') }}');">
                        <div class="text">
                            <h3>Pulau Banoz</h3>
                            <span>1</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url('{{ asset('Tangga Seribu.jpg') }}');">
                        <div class="text">
                            <h3>Tangga Seribu</h3>
                            <span>2</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate mb-2">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url('{{ asset('Goa Puteri Termenung.jpg') }}');">
                        <div class="text">
                            <h3>Goa Puteri Termenung</h3>
                            <span>3</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url('{{ asset('Danau Love.jpg') }}');">
                        <div class="text">
                            <h3>Danau Love</h3>
                            <span>4</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url('{{ asset('Batu Pensil.jpg') }}');">
                        <div class="text">
                            <h3>Batu Pensil</h3>
                            <span>5</span>
                        </div>
                    </a>
                </div>
            </div>           
            
        </div>
        </div>
    </section>
@endsection