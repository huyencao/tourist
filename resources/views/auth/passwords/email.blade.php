@extends('layouts.app')

@section('title', __('Resset password'))

@section('content')
<div class="main-bg">
    <h1 class="name">{{ __('Login') }}</h1>
    <div class="sub-main-w3">
        <input type="radio" name="sections" id="option1" checked>
        <article>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h3 class="legend last">{{ __('Reset Password') }}</h3>
                <p class="para-style">{{ __('Enter your email address below and we\'ll send you an email with instructions.') }}</p>
                <div class="input">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    <input type="email" placeholder="{{ __('Email') }}" name="email" required />
                </div>
                <button type="submit" class="btn submit last-btn">{{ __('Send Password Reset Link') }}</button>
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
