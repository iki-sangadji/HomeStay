@extends('layouts.master')
<title>Beranda</title>
@section('content')

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
            <h2 class="mb-4">It's time to start your adventure</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
          A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-paragliding"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Activities</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-route"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Travel Arrangements</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                  </div>    
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-tour-guide"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Private Guide</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-map"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Location Manager</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary</p>
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
                  <div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
              </div>
              <div class="col-md-6 pl-md-5 py-5">
                  <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                  <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
              </div>
                  <div class="row">
                <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center mb-4">
                    <div class="text">
                      <strong class="number" data-number="300">0</strong>
                      <span>Successful Tours</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center mb-4">
                    <div class="text">
                      <strong class="number" data-number="24000">0</strong>
                      <span>Happy Tourist</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center mb-4">
                    <div class="text">
                      <strong class="number" data-number="200">0</strong>
                      <span>Place Explored</span>
                    </div>
                  </div>
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
          <h2 class="mb-4">Best Place Destination</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 ftco-animate mb-2">
              <div class="project-destination">
                  <a href="#" class="img" style="background-image: url('{{ asset('keren.jpg') }}');">
                      <div class="text">
                          <h3>Pulau Banoze Termenung</h3>
                          <span>1</span>
                      </div>
                  </a>
              </div>
          </div>
      </div>
      </div>
  </section>

  <section class="ftco-section ftco-no-pt">
      <div class="container">
          <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4">Tour Destination</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="#" class="img" style="background-image: url(images/destination-1.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">$300/person</span>
                      <span class="days">8 Days Tour</span>
                      <h3><a href="#">Bali, Indonesia</a></h3>
                      <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="#" class="img" style="background-image: url(images/destination-2.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">$300/person</span>
                      <span class="days">10 Days Tour</span>
                      <h3><a href="#">Bali, Indonesia</a></h3>
                      <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="#" class="img" style="background-image: url(images/destination-3.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">$300/person</span>
                      <span class="days">7 Days Tour</span>
                      <h3><a href="#">Bali, Indonesia</a></h3>
                      <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="#" class="img" style="background-image: url(images/destination-4.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">$300/person</span>
                      <span class="days">8 Days Tour</span>
                      <h3><a href="#">Bali, Indonesia</a></h3>
                      <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="#" class="img" style="background-image: url(images/destination-5.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">$300/person</span>
                      <span class="days">10 Days Tour</span>
                      <h3><a href="#">Bali, Indonesia</a></h3>
                      <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="#" class="img" style="background-image: url(images/destination-6.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">$300/person</span>
                      <span class="days">7 Days Tour</span>
                      <h3><a href="#">Bali, Indonesia</a></h3>
                      <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>

  <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-4">Tourist Feedback</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
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