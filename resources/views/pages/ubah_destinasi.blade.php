@extends('layouts.master')
<title>Ubah Destinasi</title>
@section('content')
 {{--  Projek With K 2020 --}}
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('keren.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4 tekstengahbawah">Ubah Destinasi</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
          <div class="block-9">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-light text-center"><b>Ubah Destinasi</b></h3>
                </div>
            
                <div class="order-md-last d-flex">
                <form method="POST" action="{{route("update_trip",$id)}}" enctype="multipart/form-data" class="bg-light p-5 contact-form">
                    @csrf
                    <div class="form-group">
                    <input type="text" class="form-control" value="{{$trip->nama}}" required>
                    </div>
                    <div class="input-group rounded-pill mb-3">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" onchange="this.nextElementSibling.innerText = this.files[0].name">
                            <label class="custom-file-label" for="inputGroupFile04">Pilih File</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-info" id="inputGroupFileAddon04">Unggah</button>
                        </div>
                    </div>
                    <div class="form-group text-center">
                    <input type="submit" value="Ubah" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
        
                </div>
            </div>
          </div>
        </div>
    </section>

@endsection