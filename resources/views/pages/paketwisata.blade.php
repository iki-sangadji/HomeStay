@extends('layouts.master')
<title>Paket Wisata</title>
@section('content')
{{--  Projek With K 2020 --}}
     
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('keren.jpg') }}');" data-stellar-background-ratio="0.5">
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
                    <h2 class="mb-4 tekstengahbawah">Paket Trip Wisata</h2>
                </div>
            </div>
        </div>
    </section>

   
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                
            <div class="col-md-12 heading-section text-center ftco-animate">
                
                <h2 class="mb-4">Paket Trip Wisata</h2>
                <a href="{{route('tambah_paket_wisata')}}" class="fa fa-plus btn btn-success"> Tambah Trip</a>
                
                
            </div>
            @if ($paketList)
                @foreach ($paketList as $paket)
               
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <hr>
                        <h4>{{$paket->nama}}</h4>
                        <p>Trip hanya sekali jalan untuk beberapa tempat wisata.
                            <br> Tarif trip sekali jalan : Rp.<b> {{$paket->harga}}</b>
                        </p> 
                        <form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="{{route("delete_wisata",$paket->id_paket)}}" method="get" >
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            
                            <button class="btn btn-primary btn-md" type="submit"> 
                                <span class="align-middle">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                    </svg>
                                    Hapus
                                </span>
                            </button>
                        </form>
                        <a href="{{route('edit_wisata',$paket->id_paket)}}" class="fa fa-edit btn btn-info"> Ubah Paket</a>
                    </div>
                    </div>
                    <div class="container pt-3">
                        <div class="row">
                            @foreach ($tripList as $trip)
                                @if ($trip->paket==$paket->id_paket)
                                <div class="col-md-3 ftco-animate mb-4">
                                    <div class="project-destination">
                                        <a href="#" class="img" style="background-image: url('{{asset('storage/'.$trip->gambar)}}');">
                                            <div class="text">
                                                <h3>Pulau Banoz</h3>
                                                <form onsubmit="return confirm('Yakin Ingin Menghapus?');" action="{{route("delete_trip",$trip->id_trip)}}" method="get" >
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">                        
                                                        <span class="align-middle">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                            </svg>
                                                            Hapus
                                                        </span>
                                                    </button>
                                                </form>
                                                <button href="{{route('edit_trip',$trip->id_trip)}}" class="fa fa-edit btn btn-info btn-sm"> Ubah</button> 
                                            </div>
                                        </a>
                                    </div>           
                                </div>
                                @endif
                            @endforeach
                            
                            
                            <div class="col-md-3 ftco-animate mb-4">
                                <div class="project-destination">
                                    <a href="{{route("create_trip",$paket->id_paket)}}" class="img" style="background-color: grey">
                                        <div class="text" align="center">
                                            <h3 class="fa fa-plus"  style="margin-top: 50%"> Tambah</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>   
                            
                            
                        </div>
                        <hr>
                    </div>
                    
                    
                @endforeach
            @endif
        </div>
    </section>

@endsection