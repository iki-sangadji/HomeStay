@extends('layouts.master')
<title>Harga Kamar</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/view_from_woponta_ntu.jpeg') }}');" data-stellar-background-ratio="0.5">
	
	</section>
	
	<section class="ftco-section">
		<div class="container">
			<div class="d-flex justify-content-between mt-5 search-wrap-1 ftco-animate p-4">
				<div>
					<p class="h1 text-uppercase text-white">Tarif Inap</p>
				</div>
				<div>
					<a href="#" class="btn btn-lg btn-primary text-center">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
							<path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
						</svg>
						Baru
					</a>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-counter img" id="section-counter">
		<div class="container">
			<div class="row d-flex ftco-animate">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-self-stretch" style="background-image:url({{asset('images/wall_woponta_ntu.jpeg')}});"></div>
				</div>
				<div class="col-md-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4 text-uppercase">Kapasitas Kamar Yang Fleksibel</h2>
							<p class="text-justify">Liburan bareng sahabat / keluarga itu luar biasa menyenangkan apa lagi bila 
								kita bisa menemukan <b>homestay</b> yang harganya tepat dan sudah pasti nyaman.
								Tarif yang sesuai untuk kamu yang mau <b>sendiri atau bersama teman/keluarga</b>.
								Bermalam di <b>Woponta Ntu Homestay</b> tarif dapat menyesuaikan dengan keinginan kamu.
							</p>
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
					<h2 class="mb-4">Tarif Bermalam</h2>
				</div>
			</div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<div class="text p-4">
							<p class="price">Rp. 300000</p>
                            <p class="text-center mt-2"><i class="fa fa-moon-o text-primary mr-1 " aria-hidden="true"></i>Per Malam</p>
                            <p class="text-center"><i class="fa fa-user text-primary mr-1" aria-hidden="true"></i>Per Orang</p>
                            <p class="text-center"><i class="fa fa-bed text-primary mr-1" aria-hidden="true"></i>Per Kamar</p>
                        </div>
                    </div>
                    
                    <div class="mt-1 bg-white d-flex justify-content-end">
                        <a href="#">
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
                        <form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="" method="DELETE" >
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

                </div>

                

                <div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<div class="text p-4">
							<p class="price">Rp. 500000</p>
                            <p class="text-center mt-2"><i class="fa fa-moon-o text-primary mr-1 " aria-hidden="true"></i>Per Malam</p>
                            <p class="text-center"><i class="fa fa-users text-primary mr-1" aria-hidden="true"></i>Per 2 Orang</p>
                            <p class="text-center"><i class="fa fa-bed text-primary mr-1" aria-hidden="true"></i>Per Kamar</p>
						</div>
                    </div>
                    
                    <div class="mt-1 bg-white d-flex justify-content-end">
							<a href="#">
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
							<form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="" method="DELETE" >
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

                </div>

                <div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<div class="text p-4">
							<p class="price">Rp. 150000</p>
                            <p class="text-center mt-2"><i class="fa fa-moon-o text-primary mr-1 " aria-hidden="true"></i>Per Malam</p>
                            <p class="text-center"><i class="fa fa-user-plus text-primary mr-1" aria-hidden="true"></i>Per Tamu</p>
                            <p class="text-center"><i class="fa fa-bed text-primary mr-1" aria-hidden="true"></i>Per Kamar</p>
						</div>
                    </div>
                    
                     <div class="mt-1 bg-white d-flex justify-content-end">
							<a href="#">
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
							<form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="" method="DELETE" >
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
                </div>


            </div>
		</div>
    </section>
    


@endsection