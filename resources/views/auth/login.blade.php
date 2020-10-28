@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        <div class="form-group row">
            <h2 class="text-md-left col-md-3">{{ __('auth.loginPage') }}</h2>
        </div>
        @csrf
        <div class="form-group row">
            <label for="username"
                   class="col-md-3 col-form-label text-md-left">{{ __('auth.username') }}</label>
            <div class="col-md-7">
                <input id="username" type="string" class="form-control @error('username') is-invalid @enderror"
                       name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-3 col-form-label text-md-left">{{ __('auth.password') }}</label>
            <div class="col-md-7">
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror" name="password" required
                       autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-7 offset-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">{{ __('auth.rememberMe') }}</label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ __('auth.login') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('auth.forgottenPasswd') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
@endsection
