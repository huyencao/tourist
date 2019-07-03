@extends('frontend.layouts.master')

@section('title','Website tourist')

@section('content')
<section>
    <div class="container">
        <div class="search-container">
            <div class="tTxt">{{ __('Xin mời Quý khách chọn thông tin cần tìm kiếm') }}</div>
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
                    <div class="col1">
                        <select name="price" class="chosen-select" id="s_price">
                            <option value="0">Giá (VND)</option>
                            <option value="0-1000000">{{ __('0 - 1,000,000 đ') }}</option>
                            <option value="1000000-5000000">{{ __('1,000,000 đ - 5,000,000 đ') }}</option>
                            <option value="5000000-10000000">{{ __('5,000,000 đ - 10,000,000 đ') }}</option>
                            <option value="10000000-50000000">{{ __('10,000,000 đ - 30,000,000 đ') }}</option>
                            <option value="50000000-100000000">{{ __('30,000,000 đ - 40,000,000 đ') }}</option>
                            <option value="100000000">{{ __('Trên 50,000,000 đ') }}</option>
                        </select>
                    </div>
                    <div class="col1">
                        <button type="submit"><i class="fa fa-search icon"
                                aria-hidden="true"></i><span>{{ __('Tìm kiếm') }}</span></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- </div> -->
        <div class="row">
            <div class="col-xs-12">
                <div class="head_title">
                    <h2><i class="fa fa-anchor"></i> {{ __('label.list_tour') }}</h2>
                </div>
            </div>
            @foreach ($tour as $item)
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="box_item">
                    <img src="{{ asset($item->media->link_url) }}">
                    <div class="item_content">
                        <h3><a href="{{ route('tour.detail', $item->slug) }}">{{ str_limit($item->name, 50) }}</a></h3>
                        <div class="box_content">
                            <p><span class="day"><i class="fa fa-clock-o"
                                        aria-hidden="true"></i>{{ $item->typeTour->time }}</span>
                                <span class="price_old">{{ number_format($item->total, 0, '.', '.') }}</span></p>
                            <p><span class="date"><i
                                        class="fa fa-calendar"></i>{{ date('d/m/Y', strtotime($item->typeTour->start_day)) }}</span>
                                <span class="price_new">{{ number_format($item->total_sale, 0, '.', '.') }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
