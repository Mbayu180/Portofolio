@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $portfolio->name }} Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolios.index') }}">Management portfolio</a></li>
                        <li class="breadcrumb-item active">{{ $portfolio->name }} Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('portfolios.index') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Back">
                        <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back
                    </a>
                </div>
                <div class="card-body">
                    <img class="img-fluid rounded" src="{{ asset('img/portfolios/'.$portfolio->image) }}" alt="{{ $portfolio->name }}" />
                </div>
                <div class="card-footer">
                    <h2 class="mb-4">"{{ $portfolio->description }}"</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
