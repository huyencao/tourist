@extends('frontend.layouts.master')

@section('title','Liên hệ')

@section('content')
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h3>{{ __('label.frontend.name') }}</h3>
                <p><i class="fa fa-map-marker"></i>{{ __('label.frontend.address') }}</p>
                <h4>{{ __('label.frontend.transaction_hn') }}</h4>
                <p><i class="fa fa-map-marker"></i>{{ __('label.frontend.address2') }}</p>
                <p><i class="fa fa-phone"></i>{{ __('label.frontend.phone') }}</p>
                <p><i class="fa fa-phone"></i>{{ __('label.frontend.hotline') }}</p>
                <p><i class="fa fa-envelope-o"></i>{{ __('label.frontend.email') }}</p>
                <h4>{{ __('label.frontend.transaction_hcm') }}</h4>
                <p><i class="fa fa-map-marker"></i> {{ __('label.frontend.address3') }}</p>
                <p><i class="fa fa-phone"></i>{{ __('label.frontend.phone2') }}</p>
                <p><i class="fa fa-phone"></i>{{ __('label.frontend.hotline2') }}</p>
                <p><i class="fa fa-envelope-o"></i>{{ __('label.frontend.email2') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
