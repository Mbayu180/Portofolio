@extends('layouts.landing')

@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Certificates Detail</h2>
        <ol>
          <li><a href="{{ route('index') }}">Home</a></li>
          <li><a href="{{ route('certificates') }}">Certificates</a></li>
          <li>Certificates details</li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center mt-4">
            <!-- Portfolio Modal - Title-->
            <h2 class="certificate-modal-title text-secondary text-uppercase mb-0">{{ $certificate->name }}</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Modal - Image-->
            <img class="img-fluid rounded mb-5" src="{{ asset('img/certificates/'.$certificate->image) }}" alt="{{ $certificate->name }}" />
            <!-- Portfolio Modal - Text-->
            <p class="mb-4">{{ $certificate->description }}</p>
        </div>
    </div>
</div>
@endsection
