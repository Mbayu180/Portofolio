@extends('layouts.landing')
@section('content')
<section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Tiara Asa Nurani</h1>
        <h2>I am student who keep learning and enjoy what I do.</h2>
        <a href="{{ ('contact') }}" class="btn-get-started scrollto">Hire me</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="{{ asset('assets/img/it.png') }}" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/html.png" class="img-fluid" alt="" data-aos="flip-right">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/css.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/js.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/bootstrap.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/php.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/laravel.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Clients Section -->

@endsection
