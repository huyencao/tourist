@extends('layouts.app')

@section('title', __('Register'))

@section('content')
<div class="main-bg">
    <h1 class="name">{{ __('Register') }}</h1>
    <div class="sub-main-w3">
        <div class="section-w3ls">
            <input type="radio" name="sections" id="option2" checked>
            <article>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <h3 class="legend">{{ __('Register Here') }}</h3>
                    <div class="input {{ $errors->has('fullname') ? ' has-error' : '' }}">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" placeholder="{{ __('fullname') }}" name="fullname" required />
                        @if ($errors->has('fullname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fullname') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input {{ $errors->has('email') ? ' has-error' : '' }}">
                        <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <input type="email" placeholder="{{ __('email') }}" name="email" required />
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input {{ $errors->has('username') ? ' has-error' : '' }}">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" placeholder="{{ __('username') }}" name="username" required />
                        @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input {{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input type="password" placeholder="{{ __('password') }}" name="password" required />
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input ">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required />
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="img-rounded" id="imgInp"
                                src="{{ asset(config('app.image_url') . 'no-image.png') }}" class="image">
                            <div class="caption text-center">
                                <div class="form-group">
                                    <input type="file" id="image" name="image" onchange="loadFile(event)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submit">Register</button>
                </form>
            </article>
        </div>
        <div class="clear"></div>
    </div>
    <div class="copyright">
        <h2>&copy; {{ __('Copyright © 2019 by Mrs.Huyen') }}
        </h2>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>
@endpush
