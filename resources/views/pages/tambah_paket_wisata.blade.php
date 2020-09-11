@extends('layouts.master')
<title>Tambah Paket Trip Wisata</title>
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('keren.jpg') }}');" data-stellar-background-ratio="0.5">
      
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
          <div class="block-9">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-light text-center"><b>Tambah Paket Trip Wisata</b></h3>
                </div>
            
                <div class="order-md-last d-flex">
                <form action="#" class="bg-light p-5 contact-form">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Harga">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Gambar">
                    </div>
                    {{-- <div class="form-group">
                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div> --}}
                    <div class="form-group text-center">
                    <input type="submit" value="Tambah" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
        
                </div>
            </div>
          </div>
        </div>
    </section>

@endsection