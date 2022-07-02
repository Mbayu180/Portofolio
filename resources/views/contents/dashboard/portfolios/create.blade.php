@extends('layouts.app')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create New portfolio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolios.index') }}">Management portfolio</a></li>
                        <li class="breadcrumb-item active">Create New portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Create New portfolio</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Insert portfolio name here...">
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input id="image" name="image" type="file" class="form-control form-control-file" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input id="description" name="description" type="text" class="form-control" placeholder="Insert portfolio description here...">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Create New Data"><i class="fas fa-save"></i>&nbsp;&nbsp;Save</button>
                                <a href="{{ route('portfolios.index') }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Cancel">
                                    <i class="fas fa-undo"></i>&nbsp;&nbsp;Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
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
