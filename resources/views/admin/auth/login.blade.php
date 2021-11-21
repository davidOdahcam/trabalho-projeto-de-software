@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="form-login">
        @csrf

        <div class="logo">
            <i class="fas fa-plane"></i>
        </div>

        <h1 class="title">Bem-vindo</h1>
        <h2 class="sub-title">Digite seus dados para acessar o sistema.</h2>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend bg-white">
                    <span class="input-group-text bg-white border-right-0">
                        <i class="fas fa-envelope text-first"></i>
                    </span>
                </div>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
            </div>

            @error('email')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend bg-white">
                    <span class="input-group-text bg-white border-right-0">
                        <i class="fas fa-key"></i>
                    </span>
                </div>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="{{ __('Password') }}" required autocomplete="current-password">
            </div>

            @error('password')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group clearfix">
            <div class="icheck-first d-inline">
                <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-second btn-block">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link text-second" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
@endsection
