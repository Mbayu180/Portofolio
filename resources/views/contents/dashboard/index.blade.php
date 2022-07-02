@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="content-wrapper">
    <!--Header & Breadcrumb content -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Main content -->
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ asset('assets/img/tiaraindex.png') }}"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Tiara Asa Nurani</h3>

                  <p class="text-muted text-center">Student Colleges</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Degree</b> <a class="float-right">D3</a>
                    </li>
                    <li class="list-group-item">
                      <b>Semester</b> <a class="float-right">3</a>
                    </li>
                    <li class="list-group-item">
                      <b>Age</b> <a class="float-right">20</a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>

                  <p class="text-muted">
                   Management Informatic of AMIK Bumi Nusantara Cirebon
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                  <p class="text-muted">Cirebon, West Java</p>

                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                  <p class="text-muted">Keep spririt and positive thinking</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
            <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{ asset('assets/img/tiaraindex.png') }}" alt="user image">
                        <span class="username">
                          <a href="#">Tiara Asa Nurani</a>

                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        I want to be traveler who can many coutry. I hope I can in the future. in this below pictures are one of the country what I want come in.
                      </p>
                      <div class="row">

                        <div class="col-md-6">
                          <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="{{ asset('assets/img/korea.jpg') }}" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                            </div>
                          </div>
                        </div>

                      <div class="col-md-6">
                        <div class="card mb-2">
                          <img class="card-img-top" src="{{ asset('assets/img/itaewon.jpg') }}" alt="Dist Photo 2">
                          <div class="card-img-overlay d-flex flex-column justify-content-center">
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                    <!-- /.post -->
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endsection



