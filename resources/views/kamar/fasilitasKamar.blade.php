@extends('layouts.master')
<title>Fasilitas Kamar</title>
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/upside_woponta_ntu.jpeg') }}');" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4 tekstengahbawah">Fasilitas Kamar</h2>
				</div>
			</div>
		</div>
    </section>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-flex justify-content-between mt-5 search-wrap-1 ftco-animate p-4">
				<div class="col-md-6">
					<p class="h1 text-uppercase text-white">Fasilitas Kamar</p>
				</div>
				<div class="col-md-6">
					<form>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
							<div class="input-group-prepend">
								<button class="btn btn-lg btn-primary text-center rounded-lg rounded-right" type="button" id="button-addon1">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
										<path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
									</svg>
									Baru
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter services-section bg-light" id="section-counter">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
					<h2 class="mb-4">Kelola Fasilitas Kamar</h2>
					<p>
						Atur fasilitas pada kamar <b>Woponta Ntu Homestay</b>.
					</p>
					<p>
						Memastikan memasukkan data fasilitas yang akan didapat pada setiap kamar.
						Silahkan ubah, tambah, dan hapus fasilitas kamar.
					</p>
				</div>
				<div class="col-md-6">
					<div class="table-responsive-sm">
						<table class="table table-borderless">
							<thead>
								<tr class="bg-primary text-dark">
									<th scope="col">Fasilitas</th>
									<th scope="col" colspan="2">Aksi Fasilitas Kamar</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td>
										<input type="text" class="form-control" placeholder="fan">
									</td>
									<td>
										<a href="#">
											<button type="submit" class="btn btn-primary">
												<span class="align-middle">
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
													</svg>
													Edit
												</span>
											</button>
										</a>
									</td>
									<td>
										<form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="" method="DELETE" >
											{{ csrf_field() }}
											<input type="hidden" name="_method" value="DELETE">
											
											<button class="btn btn-primary" type="submit"> 
												<span class="align-middle">
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
													</svg>
													Hapus
												</span>
											</button>
										</form>
									</td>
								</tr>

								<tr>
									<td>
										<input type="text" class="form-control" placeholder="Hammock">
									</td>
									<td>
										<a href="#">
											<button class="btn btn-primary">
												<span class="align-middle">
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
													</svg>
													Edit
												</span>
											</button>
										</a>
									</td>
									<td>
										<form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="" method="DELETE" >
											{{ csrf_field() }}
											<input type="hidden" name="_method" value="DELETE">
											
											<button class="btn btn-primary" type="submit"> 
												<span class="align-middle">
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
													</svg>
													Hapus
												</span>
											</button>
										</form>
									</td>
								</tr>

								<tr>
									<td>
										<input type="text" class="form-control" placeholder="Electric Plugs">
									</td>
									<td>
										<a href="#">
											<button class="btn btn-primary">
												<span class="align-middle">
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
													</svg>
													Edit
												</span>
											</button>
										</a>
									</td>
									<td>
										<form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="" method="DELETE" >
											{{ csrf_field() }}
											<input type="hidden" name="_method" value="DELETE">
											
											<button class="btn btn-primary" type="submit"> 
												<span class="align-middle">
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
													</svg>
													Hapus
												</span>
											</button>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img mb-4" id="section-counter">
		<div class="container">
			<div class="row justify-content-center p-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Fasilitas Kami</h2>
				</div>
			</div>
			<div class="row d-flex ftco-animate">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-self-stretch" style="background-image:url({{asset('images/frontside_woponta_ntu.jpeg')}});"></div>
				</div>
				<div class="col-md-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4 text-uppercase">Menambah kenyamanan Anda, Tersedia :</h2>
							<p class="text-justify">
								Fan	<br>
								Hammock <br>
								Electric plugs<br>
							</p>
						</div>
					</div>
				</div>
			</div>
			{{-- <hr> --}}
		</div>
	</section>
    
@endsection