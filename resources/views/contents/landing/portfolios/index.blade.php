@extends('layouts.landing')
@section('content')
<section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">My Portfolio</h2>
        <p data-aos="fade-in">This is the list of my project.</p>
      </div>
      <div class="row">
        @if ($portfolios->isEmpty())
        <div class="text-center my-2"><i>Data empty.</i></div>
        @else
        @foreach ($portfolios as $list)
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
          <div class="card">
            <div class="card-img">
              <img src="{{ asset('img/portfolios/'. $list->image) }}"  alt="..." style="height: 100%; width:100%;">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $list->name }}</h5>
              <p class="card-text">{{ $list->description }}</p>
              <div class="read-more"><a href="{{ route('portfolio.detail', ['portfolio' => $list->id]) }}"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
        </div>
        @endforeach
        @endif
    </div>
  </section><!-- End Services Section -->

@endsection
