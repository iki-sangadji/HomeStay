@extends('layouts.master')
<title>Beranda</title>
@section('content')
{{--  Projek With K 2020 --}}
 
<div class="hero-wrap" style="background-image: url('{{ asset('welcome.jpg') }}' );" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
              <h2 class="mb-4 tekstengahbawah">Beranda</h2>
          </div>
      </div>
    </div>
</div>


<section class="ftco-section services-section bg-light">
    <div class="container">
    <div class="row d-flex">
        <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
        <h2 class="mb-4">Saatnya melakukan perjalanan dan petualangan</h2>
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
                <p>Banyak aktiftitas seru dan  menyenangkan di Pulau misool</p>
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
            <h2 class="mb-4">Jadikan Tur Anda Berkesan dan Aman Bersama Kami</h2>
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


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Destinasi Populer</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($galeriList as $row)
                
                    <div class="col-md-3 ftco-animate mb-4">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url('{{asset('storage/'.$row->gambar)}}');">
                                <div class="text">
                                    <h3>{{$row->nama}}</h3>
                                </div>
                            </a>
                        </div>
                        @auth
                        <div class="mt-1 bg-white d-flex justify-content-end">
                            <a href="{{route('edit_galeri',$row->id_galeri)}}">
                                <button class="btn btn-sm btn-primary mr-1">
                                    <span class="align-middle">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                        Edit
                                    </span>
                                </button>
                            </a>
                            <form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="{{route('delete_galeri',$row->id_galeri)}}" method="get" >
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                
                                <button class="btn btn-primary btn-sm" type="submit"> 
                                    <span class="align-middle">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                        Hapus
                                    </span>
                                </button>
                            </form>
                        </div>
                        @endauth
                    </div>
                
            @endforeach
        </div>
    </div>
</section>

	{{-- <section class="ftco-section">
		<div class="container">
			<div class="row ftco-animate justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Detail Kamar</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 ftco-animate">
					<div class="card mb-3" style="height:50%">
						<img src="{{asset('images/kamar_woponta_ntu.jpeg')}}" class="img-fluid" alt="Tipe Kamar Woponta Ntu" style="width:100%; height:500px !important;">
						<div class="card-body">
							<h5 class="card-title">Double Bed</h5>
							<p class="card-text">
								This is a wider card with supporting text below <br> 
								as a natural lead-in to additional content. <br> 
								This content is a little bit longer.
								This is a wider card with supporting text below <br> 
								as a natural lead-in to additional content. <br> 
								This content is a little bit longer.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 ftco-animate">
					<div class="card mb-3" style="height:50%">
						<img src="{{asset('images/kamar_woponta_ntu.jpeg')}}" class="img-fluid" alt="Tipe Kamar Woponta Ntu" style="width:100%; height:500px !important;">
						<div class="card-body">
							<h5 class="card-title">Single Bed</h5>
							<p class="card-text">
								This is a wider card with supporting text below <br> 
								as a natural lead-in to additional content. <br> 
								This content is a little bit longer.
								This is a wider card with supporting text below <br> 
								as a natural lead-in to additional content. <br> 
								This content is a little bit longer.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img mb-4" id="section-counter">
		<div class="container">
			<div class="row d-flex ftco-animate">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-self-stretch" style="background-image:url({{asset('images/frontside_woponta_ntu.jpeg')}});"></div>
				</div>
				<div class="col-md-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4">Menambah kenyamanan Anda, Tersedia :</h2>
							<p class="text-justify">
								Fan	<br>
								Hammock <br>
								Electric plugs<br>
							</p>
						</div>
					</div>
				</div>
			</div>
			{{-- <hr> 
		</div>
	</section> --}}
@endsection