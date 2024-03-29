@extends('layouts.master')
<title>Profil</title>
@section('content')
{{--  Projek With K 2020 --}}
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('deep-dive.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4 tekstengahbawah">Profil</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section bg-light">
        <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
            <h2 class="mb-4">Saatnya Melakukan Perjalanan Dan Petualangan</h2>
            <p>
                Keindahan dari <b>Raja Ampat</b> tidak perlu dipertanyakan lagi, yang juga menjadi salah satu primadona bagi traveller. 
                <b> Pulau Misool </b> dengan pesona dan keindaan bawah lautnya mempunyai 
                daya tarik yang begitu cantik dan menggoda untuk dilewatkan. 
            </p>
            <p>Keunikan Pulau Misool adalah adanya deretan batu karang di bagian timur dan 
                indahnya pasir putih dengan pemandangan hutan mangrove hijau yang memesona. 
                Air lautnya juga terlihat cantik dengan warna biru turquoise. Saking beningnya air laut di Pulau Misool, kamu bisa mudah melihat aneka kekayaaan alam di titik penyelamannya, 
                seperti berbagai jenis ikan, hiu, penyu, terumbu karang, dan lain-lain.
            </p>
            <p><a href="{{route('paket_wisata')}}" class="btn btn-primary py-3 px-4">Paket Wisata</a></p>
            </div>
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-paragliding"></span></div>
                    <div class="media-body">
                    <h3 class="heading mb-3">Aktifitas</h3>
                    <p>Banyak aktiftitas seru dan  menyenangkan di Pulau Misool</p>
                    </div>
                </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-route"></span></div>
                    <div class="media-body">
                    <h3 class="heading mb-3">Agenda Perjalanan</h3>
                    <p>Mempermudah agenda perjalanan dengan paket wisata yang seru dan memorable.</p>
                    </div>
                </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-tour-guide"></span></div>
                    <div class="media-body">
                    <h3 class="heading mb-3">Private Guide</h3>
                    <p>Ditemani oleh Guide yang ramah dan menyenangkan.</p>
                    </div>
                </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-map"></span></div>
                    <div class="media-body">
                    <h3 class="heading mb-3">Lokasi dan Spot Wisata</h3>
                    <p>Daftar paket yang terjadwal dan sudah terakomodasi. Tidak perlu ribet lagi. </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
        <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
            <div class="img d-flex align-self-stretch" style="background-image:url('{{ asset('clown-fish.jpg') }}');"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                <h2 class="mb-4">Jadikan Tur Anda Berkesan Dan Menyenangkan Bersama Kami</h2>
                <p>
                    Momen berlibur juga akan jauh lebih berkesan jika dilewatkan dengan pengalaman yang menyenangkan. 
                    Ingin Menikmati keindahan dan daya tarik di <b>Pulau Misool</b> kami dapat menyediakan tempat untuk
                    menginap dan memiliki agenda perjalanan dengan paket wisata terbaik, aman dan nyaman.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection