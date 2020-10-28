@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group row">
            <h2 class="text-md-left col-md-4">{{ __('auth.resetPage') }}</h2>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('auth.email') }}</label>

            <div class="col-md-5">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-5 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('auth.sendResetLink') }}
                </button>
            </div>
        </div>
    </form>
@endsection
