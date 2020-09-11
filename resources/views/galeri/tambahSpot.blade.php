@extends('layouts.master')
<title>Tambah Spot</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('clown-fish.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4 tekstengahbawah">Tambah Spot</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section bg-light" id="section-counter">
		<div class="container">
			<div class="row d-flex ftco-animate">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-block">
								<div class="icon"><span class="flaticon-paragliding"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Aktifitas</h3>
									<p>
                                        Tambahkan spot wisata agar pengunjung dapat melakukan aktivitas trip.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-block">
								<div class="icon"><span class="flaticon-route"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Agenda Perjalanan</h3>
									<p>
                                        Tambahkan spot Wisata yang dapat dimasukan ke agenda paket perjalanan.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-block">
								<div class="icon"><span class="flaticon-tour-guide"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Private Guide</h3>
									<p>
                                        Tambahkan spot wisata yang dapat dikenali oleh pemimpin perjalanan (tour guide).
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-block">
								<div class="icon"><span class="flaticon-map"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Kelola Lokasi</h3>
									<p>
                                        Tambahkan spot wisata yang dapat dijadwalkan dan memberikan aktivitas menyenangkan bagi pengunjung.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4 text-uppercase">Spot Baru</h2>
                            
                            <form method="POST" action="" enctype="multipart/form-data" class="bg-light p-5 contact-form">
                            @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile " onchange="this.nextElementSibling.innerText = this.files[0].name">
                                            <label class="custom-file-label" for="customFile">Browse</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection