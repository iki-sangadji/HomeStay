@extends('layouts.master')
<title>Paket Wisata</title>
@section('content')
{{--  Projek With K 2020 --}}
     
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('keren.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4 tekstengahbawah">Paket Trip Wisata</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                
                <h2 class="mb-4">Paket Trip Wisata</h2>
                <a href="{{route('tambah_paket_wisata')}}" class="btn btn-success">Tambah Trip</a>
                
                <hr>
            </div>
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h4>Trip 1</h4>
                <p>Trip ke <b>1</b>  hanya sekali jalan untuk beberapa tempat wisata.
                    <br> Tarif trip sekali jalan : <b> 4.000.000</b>
                </p> 
                <a href="#" class="btn btn-danger">Hapus Trip</a>
                <a href="{{route('edit_paket_wisata')}}" class="btn btn-info">Ubah Trip</a>
            </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url('{{ asset('Pulau Banoz.jpg') }}');">
                            <div class="text">
                                <h3>Pulau Banoz</h3>
                                <span>1</span>
                            </div>
                        </a>
                    </div>
                    <div align="center">
                        <a href="{{route('tambah_destinasi')}}" class="btn btn-success m-2">Tambah Destinasi</a>
                        <a href="#" class="btn btn-danger m-2">Hapus Destinasi</a>
                        <a href="{{route('ubah_destinasi')}}" class="btn btn-info m-2">Ubah Destinasi</a>
                    </div>
                    
                </div>
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url('{{ asset('Tangga Seribu.jpg') }}');">
                            <div class="text">
                                <h3>Tangga Seribu</h3>
                                <span>2</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url('{{ asset('Goa Puteri Termenung.jpg') }}');">
                            <div class="text">
                                <h3>Goa Puteri Termenung</h3>
                                <span>3</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url('{{ asset('Danau Love.jpg') }}');">
                            <div class="text">
                                <h3>Danau Love</h3>
                                <span>4</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate mb-4">
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
            <hr>
        </div>
    </section>

@endsection