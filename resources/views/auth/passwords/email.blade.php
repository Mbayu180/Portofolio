@extends('layouts.app')

@section('content')
<div class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('index') }}" class="h1">Website<b>Ku</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Reset Password</p>

                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    {{-- EMAIL FIELD --}}
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </form>
                <div class="mt-2">
                    <a href="{{ route('login') }}" class="text-center">Back to login page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
