@extends('layouts.master')
<title>Galeri</title>
@section('content')
{{--  Projek With K 2020 --}}
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('clown-fish.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center pb-4">
                @if (session('message'))
				<div class="alert alert-success alert-dismissible fade show " role="alert" style="margin-top: 70px">
					<p class="text-success">{{session('message')}}</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				@endif
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4 tekstengahbawah">Galeri</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
		<div class="container">
			<div class="d-flex justify-content-between mt-5 search-wrap-1 ftco-animate p-4">
				<div>
					<p class="h1 text-uppercase text-white">Tambah Spot Trip</p>
				</div>
				<div>
					<a href="{{route('tambahSpot')}}" class="btn btn-lg btn-primary text-center">
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
                    </div>
                
            @endforeach
        </div>
        </div>
    </section>

@endsection