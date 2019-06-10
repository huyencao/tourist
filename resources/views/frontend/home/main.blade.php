@extends('frontend.layouts.master')

@section('title','Website tourist')

@section('content')
<section>
    <div class="container">
    <div class="search-container">
        <form class="form-inline typeahead">
            <div class="form-group">
                <input type="name" class="form-control search-input" id="name" autocomplete="off"
                    placeholder="{{ __('Search tourist..') }}">
            </div>
        </form>
    </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="head_title">
                    <h2> <i class="fa fa-anchor"></i> {{ __('label.frontend.cate_sale') }}</h2>
                    <div class="hea_right"><a href="">{{ __('label.frontend.see_more') }}</a></div>
                </div>
            </div>
            @foreach ($data_sale as $sale)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="box_item">
                        <img src="{{ asset($sale->media->link_url) }}">
                        <div class="item_content">
                            <h3><a href="{{ route('tour.detail', $sale->slug) }}">{{ str_limit($sale->name, 50) }}</a></h3>
                            <div class="box_content">
                                <p><span class="day"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $sale->typeTour->time }}</span>
                                    <span class="price_old">{{ number_format($sale->total, 0, '.', '.') }}</span></p>
                                <p><span class="date"><i class="fa fa-calendar"></i>{{ date('d/m/Y', strtotime($sale->typeTour->start_day)) }}</span> <span
                                        class="price_new">{{ number_format($sale->total_sale, 0, '.', '.') }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xs-12">
                <div class="m_xemthem">
                    <a href="#">{{ __('label.frontend.see_more') }}</a>
                </div>
            </div>
        </div>
        {{ $data_sale->links() }}
    </div>
</section>
<section>
    <div class="why">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h2>{{ __('label.frontend.reason_choose') }}</h2>
                </div>
                <div class="col-xs-12">
                    <ul class="sub_icon">
                        <li>
                            <div class="icon">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </div>
                            <p>{{ __('label.frontend.reason1') }}</p>
                        </li>
                        <li>
                            <div class="icon money"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <p>{{ __('label.frontend.reason2') }}</p>
                        </li>
                        <li>
                            <div class="icon smile"><i class="fa fa-smile-o"></i></div>
                            <p>{{ __('label.frontend.reason3') }}</p>
                        </li>
                        <li>
                            <div class="icon boxgift"><i class="fa fa-gift"></i></div>
                            <p>{{ __('label.frontend.reason4') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
