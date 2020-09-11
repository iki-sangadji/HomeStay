@extends('layouts.master')
<title>Ubah Detail Tipe Kamar</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('warm-night.jpg') }}');" data-stellar-background-ratio="0.5">
	
	</section>

    <section class="ftco-counter img" id="section-counter">
		<div class="container">
            <div class="row ftco-animate justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Perbarui Detail Kamar</h2>
				</div>
			</div>
			<div class="row d-flex ftco-animate">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-self-stretch" style="background-image:url({{asset('images/frontside_woponta_ntu.jpeg')}});"></div>
				</div>
				<div class="col-md-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4 text-uppercase">Form Perbarui Data Kamar</h2>
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
                                <div class="form-group row">
                                    <label for="inputdesk3" class="col-sm-2 col-form-label">Desk.</label>
                                    <div class="col-sm-10">
                                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pebarui Data Kamar"></textarea>
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