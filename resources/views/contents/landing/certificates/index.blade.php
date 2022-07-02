@extends('layouts.landing')
@section('content')
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">My Certificates</h2>
        <p data-aos="fade-in">The list in below are some of my certificates what I got when I Had studied in Codepolitan.</p>
      </div>
      <div class="row">
        @if ($certificates->isEmpty())
        <div class="text-center my-2"><i>Data empty.</i></div>
        @else
      @foreach ($certificates as $list)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/certificates/{{ $list->image}}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ route('certificate.detail', ['certificate' => $list->id]) }}" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            <div class="portfolio-info">
              <h4>{{ $list->title}}</h4>
              <p>{{ $list->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
      </div>
      </div>
  </section><!-- End Portfolio Section -->

@endsection
