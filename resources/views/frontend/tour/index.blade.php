@extends('frontend.layouts.master')

@section('title', __('label.tour') )

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="support_tour">
                <h3>{{ __('label.advisory') }}</h3>
                <div class="hotline">
                    <p class="phone"><i class="fa fa-phone"></i> {{ __('label.frontend.hotline') }}</p>
                </div>
            </div>
            <div class="menu_right">
                <h3>{{ __('label.explore_more') }}</h3>
                <div class="list_menu">
                    <ul>
                        @foreach ($list_cate as $cate)
                        <li><a href="{{ $cate->slug }}">{{ $cate->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="list_tour">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#khachle">{{ $result->name }}</a></li>
                </ul>
                <div class="tab-content">
                    <div id="khachle" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box_tour">
                                    @if (!empty($data))
                                    @foreach ($data as $value)
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5 col-md-5">
                                            <a href=""><img src="{{ asset($value->media->link_url) }}" alt=""></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-7 col-md-7">
                                            <div class="box_main">
                                                <h3>{{ $value->name }}</h3>
                                                <h4>{{ $value->category->name }}</h4>
                                                <div class="content">
                                                    <p>{!! str_limit($value->schedule, 100) !!}</p>
                                                    <p>{{ $value->typeTour->time }}</p>
                                                    <p>{{ $value->vehicle }}</p>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="box_price">
                                                <p>{{ __('label.frontend.price_tour') }}</p>
                                                <p class="price">
                                                    {{ number_format($value->sale ? $value->total_sale : $value->total, 0, '.', '.') }}{{ __('label.vnd') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 ">
                                            <div class="box_book">
                                                <div class="box_1">
                                                    <span class="book_date"><i class="fa fa-calendar">
                                                        </i>{{ date('d/m/Y', strtotime($value->typeTour->start_day)) }}</span>
                                                    <span class="book_price"><i class="fa fa-money"
                                                            aria-hidden="true"></i>{{ number_format($value->sale ? $value->total_sale : $value->total, 0, '.', '.') }}{{ __('label.vnd') }}</span>
                                                </div>
                                                <div class="box_2">
                                                    <span class="book_detail"><a
                                                            href="{{ route('tour.detail', $value->slug) }}">{{ __('label.frontend.detail') }}</span></a><span
                                                        class="book_now">{{ __('Book tour') }}</span>
                                                </div>
                                                <p class="load_date">{{ __('label.frontend.see_more') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
