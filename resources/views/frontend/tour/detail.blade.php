@extends('frontend.layouts.master')

@section('title', __('label.tour') )

@section('content')
<div class="container">
    <div class="tour_detail">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="row">
                    <div class="detail">
                        @foreach ($data as $item)
                        <div class="col-xs-12 col-sm-5 col-md-5">
                            <img src="{{ asset($item->media->link_url) }}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7">
                            <div class="box_detail">
                                <h3>{{ $item->name }}</h3>
                                <div class="detail_con">
                                    <p><span class="date">{{ __('label.time') }}</span>{{ $item->typeTour->time }}</p>
                                    <p><span class="car">{{ __('label.vehicle') }}</span>{{ $item->vehicle }}</p>
                                    <p><span class="start">{{ __('label.starting_point') }}</span>{{ $item->starting_point }}</p>
                                    <p><span class="end">{{ __('label.destination') }}</span>{{ $item->destination }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <table class="table table-bordered table-customize table-responsive">
                                <thead>
                                    <tr>
                                        <th>{{ __('label.start_day') }}</th>
                                        <th>{{ __('label.tour_code') }}</th>
                                        <th>{{ __('label.total') }}</th>
                                        <th>{{ __('label.baby_price') }}</th>
                                        <th>{{ __('label.child_price') }}</th>
                                        <th>{{ __('label.adult_price') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <span class="tb_date">{{ date('d/m/Y', strtotime($item->typeTour->start_day)) }}</span></td>
                                        <td><span class="tb_date">{{ $item->typeTour->tour_code }}</span></td>
                                        <td><span class="tb_prie">{{ number_format($item->total, 0, '.', '.') }}</span></td>
                                        <td><span class="tb_prie">{{ number_format($item->typeTour->baby_price, 0, '.', '.') }}</span></td>
                                        <td><span class="tb_prie">{{ number_format($item->typeTour->child_price, 0, '.', '.') }}</span></td>
                                        <td><span class="tb_prie">{{ number_format($item->typeTour->adult_price, 0, '.', '.') }}</span></td>
                                        <td><a href="{{ route('book', $item->slug) }}"><span class="tb_book">{{ __('Book tour') }}</span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12">
                            <div class="title_detail">
                                <h3>{{ __('label.schedule_detail') }}</h3>
                            </div>
                            {!! $item->schedule !!}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="img_right">
                    <a href=""><img src="" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
