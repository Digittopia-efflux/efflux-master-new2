@extends('core.web')

@section('content')
<body class="login-page bg-gradient-dark">
<div class="flex-center position-ref full-height">
    <div class="register-box">
        <div class="register-logo">
            <a href="/" class="brand-link text-white">
                <i class="fab fa-erlang"></i> <span class="brand-text">fflux</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body register-card-body py-2">
                <p class="login-box-msg mt-2">Register a New Account</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
                        <div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>
                        @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
                        <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
                        @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
                        @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
                        <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">I agree to the <a href="#">terms</a></label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center mt-5 mb-3">- OR -</p>
        <div class="social-auth-links text-center m-0 p-0">
            <div class="row">
                <div class="col-6 p-1">
                    <a href="#" class="btn btn-block btn-dark social-auth" style="background:#4267b2;">
                        <i class="fab fa-facebook mr-2"></i> Facebook
                    </a>
                </div>
                <div class="col-6 p-1">
                    <a href="#" class="btn btn-block btn-dark social-auth" style="background:#d14538;">
                        <i class="fab fa-google-plus mr-2"></i> Google+
                    </a>
                </div>
                <div class="col-8 offset-2 p-1">
                    <a href="{{ route('login') }}" class="btn btn-block btn-warning">
                        <i class="fas fa-undo mr-2"></i> I already have an account
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
