@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Management Certificates</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Management Certificates</li>
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
                    <h3 class="card-title">Certificates</h3>
                    <a href="{{ route('certificates.create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Create New Certificates
                    </a>
                </div>
                <div class="card-body table-responsive p-0">
                    @if ($certificates->isEmpty())
                        <div class="text-center my-2"><i>Data empty.</i></div>
                    @else
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 20px;" class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Description</th>
                                    <th style="width: 50px;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificates as $key => $certificate)
                                    <tr>
                                        <td tyle="width: 20px" class="text-center align-middle">{{ $key + $certificates->firstItem() }}</td>
                                        <td class="align-middle text-center">{{ $certificate->name }}</td>
                                        <td class="align-middle text-center">{{ $certificate->description }}</td>
                                        <td style="width: 50px;" class="align-middle text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('certificates.show', ['certificate' => $certificate->id]) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View Data">
                                                    <i class="fas fa-address-card"></i>
                                                </a>
                                                <a href="{{ route('certificates.edit', ['certificate' => $certificate->id]) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#data{{ $certificate->id }}" data-toggle="modal" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- MODAL FOR DELETE ITEM --}}
                                    <div class="modal fade" tabindex="-1" id="data{{ $certificate->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete {{ $certificate->name }} Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this data?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form method="POST" action="{{ route('certificates.destroy', $certificate->id) }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>&nbsp;&nbsp;Delete {{ $certificate->name }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="float-right mt-3">
                        {{ $certificates->links() }}
                    </div>
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
