@extends('layouts.web')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="/" class="brand-link text-white">
            <span class="brand-text">EFFLUX</span>
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            @if (session('status')) <div class="alert alert-success" role="alert">{{ session('status') }}</div> @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                    <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
                    @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                </div>
                <div class="row">
                    <div class="col-3"><a href="{{ route('login') }}" class="btn btn-link text-danger">Cancel</a></div>
                    <div class="col-9"><button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
