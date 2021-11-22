@extends('layouts.auth')

@section('content')
@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('password.email') }}" class="form-login">
        @csrf

        <div class="logo">
            <i class="fas fa-plane"></i>
        </div>

        <h1 class="title">{{ __('Reset Password') }}</h1>
        <h2 class="sub-title">Digite seu email para modificar a senha.</h2>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend bg-white">
                    <span class="input-group-text bg-white border-right-0" id="basic-addon1">
                        <i class="fas fa-envelope text-first"></i>
                    </span>
                </div>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-second btn-block">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
@endsection
