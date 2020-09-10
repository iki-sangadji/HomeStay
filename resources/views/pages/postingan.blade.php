@extends('layouts.master')
<title>Postingan</title>
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('deep-dive.jpg') }}');" data-stellar-background-ratio="0.5">
        
    </section>

    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Recent Post</h2>
        </div>
        </div>
        <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-4 topp">
                    <div class="one">
                        <span class="day">21</span>
                    </div>
                    <div class="two">
                        <span class="yr">2019</span>
                        <span class="mos">August</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-4 topp">
                    <div class="one">
                        <span class="day">21</span>
                    </div>
                    <div class="two">
                        <span class="yr">2019</span>
                        <span class="mos">August</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-4 topp">
                    <div class="one">
                        <span class="day">21</span>
                    </div>
                    <div class="two">
                        <span class="yr">2019</span>
                        <span class="mos">August</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection