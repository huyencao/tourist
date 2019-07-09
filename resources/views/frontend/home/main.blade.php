@extends('frontend.layouts.master')

@section('title','Website tourist')

@section('content')
<section>
    <div class="container">
        <div class="search-container">
            <div class="title-search">{{ __('Xin mời Quý khách chọn thông tin cần tìm kiếm') }}</div>
            <form action="{{ route('search.find') }}" method="post">
            @csrf
                <div class="grid">
                    <div class="col1">
                        <input type="text" name="nametour" id="nametour" placeholder="Vd: Tour du lịch...">
                    </div>
                    <div class="col1">
                        <input type="text" name="starting_point" id="starting_point" placeholder="Vd: Hà Nội">
                    </div>
                    <div class="col1">
                        <input type="text" name="destination" id="destination" placeholder="Vd: Đà Nẵng">
                    </div>
                    <!-- <div class="col1">
                        <select name="price" class="chosen-select" id="s_price">
                            <option value="0">{{ __('Giá (VND)') }}</option>
                            <option value="0-1000000">{{ __('0 - 1,000,000 đ') }}</option>
                            <option value="1000000-5000000">{{ __('1,000,000 đ - 5,000,000 đ') }}</option>
                            <option value="5000000-10000000">{{ __('5,000,000 đ - 10,000,000 đ') }}</option>
                            <option value="10000000-50000000">{{ __('10,000,000 đ - 50,000,000 đ') }}</option>
                            <option value="50000000-100000000">{{ __('50,000,000 đ - 100,000,000 đ') }}</option>
                            <option value="100000000">{{ __('Trên 100,000,000 đ') }}</option>
                        </select>
                    </div> -->
                    <div class="col1">
                        <button type="submit"><i class="fa fa-search icon" aria-hidden="true"></i><span>{{ __('Tìm kiếm') }}</span></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- </div> -->
        <div class="row">
            <div class="col-xs-12">
                <div class="head_title">
                    <h2> <i class="fa fa-anchor"></i> {{ __('label.frontend.cate_sale') }}</h2>
                </div>
            </div>
            @if ($statusRedis == 1)
                @foreach ($data_sale as $sale)
                <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="box_item">
                            <img src="{{ asset($sale['media']['link_url']) }}">
                            <div class="item_content">
                                <h3><a href="{{ route('tour.detail', $sale['slug']) }}">{{ str_limit($sale['name'], 50) }}</a></h3>
                                <div class="box_content">
                                    <p><span class="day"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $sale['type_tour']['time'] }}</span>
                                        <span class="price_old">{{ number_format($sale['total'], 0, '.', '.') }}</span></p>
                                    <p><span class="date"><i class="fa fa-calendar"></i>{{ date('d/m/Y', strtotime($sale['type_tour']['start_day'])) }}</span>
                                       <span class="price_new">{{ number_format($sale['total_sale'], 0, '.', '.') }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
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
            @endif
            <div class="col-xs-12">
                <div class="m_xemthem">
                    <a href="#">{{ __('label.frontend.see_more') }}</a>
                </div>
            </div>
        </div>
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
