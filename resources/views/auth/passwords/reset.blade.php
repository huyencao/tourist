@extends('layouts.app')

@section('title', __('Resset password'))

@section('content')
<div class="main-bg">
    <h1 class="name">{{ __('Reset Password') }}</h1>
    <div class="sub-main-w3">
        <article>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <h3 class="legend last">{{ __('Reset Password') }}</h3>
                <p class="para-style">{{ __('E-Mail Address') }}</p>
                <div class="input form-control @error('email') is-invalid @enderror">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    <input type="email" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus
                        required />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- password new -->
                <p class="para-style">{{ __('Password') }}</p>
                <div class="input form-control @error('password') is-invalid @enderror">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    <input type="password" name="password" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus
                        required />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- confirm -->
                <p class="para-style">{{ __('Confirm Password') }}</p>
                <div class="input form-control">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    <input type="password" name="password_confirmation" require
                        autocomplete="new-password">
                </div>
                <button type="submit" class="btn submit last-btn">{{ __('Reset Password') }}</button>
            </form>
        </article>
        <div class="clear"></div>
    </div>
    <div class="copyright">
        <h2>&copy; {{ __('Copyright © 2019 by Mrs.Huyen') }}
        </h2>
    </div>
</div>
@endsection
