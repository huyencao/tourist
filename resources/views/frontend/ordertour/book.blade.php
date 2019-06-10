@extends('frontend.layouts.master')

@section('title', __('label.booktour.title') )

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $err)
    {{ $err }}<br>
    @endforeach
</div>
@endif
@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
<section class="book_tour">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-4">
                <span class="bt_next btn_1 active">{{ __('label.booktour.service') }}</span>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-4">
                <span class="bt_next btn_2">{{ __('label.booktour.infor') }}</span>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-4">
                <span class="bt_next btn_3">{{ __('label.booktour.payment') }}</span>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <form action="{{ route('book.store', $data[0]['slug']) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="book_one">
                        <h3 class="title_book">{{ __('label.booktour.number') }}</h3>
                        <input type="hidden" id="sale" name="sale" data-sale="{{ $data[0]['sale'] }}">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="form-group">
                                    <label>{{ __('label.booktour.adult') }}</label>
                                    <input type="number" name="number_adult" value="1" class="form-control"
                                        required="required" min="1" pattern="^\d+$" id="number_adult"
                                        price-adult="{{ $data[0]->typeTour->adult_price }}">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
                                <div class="form-group">
                                    <label>{{ __('label.booktour.child') }}</label>
                                    <input type="number" name="number_child" value="1" class="form-control" min="0"
                                        pattern="^\d+$" id="number_child"
                                        price-chil="{{ $data[0]->typeTour->child_price }}">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
                                <div class="form-group">
                                    <label>{{ __('label.booktour.baby') }}</label>
                                    <input type="number" name="number_baby" value="1" class="form-control" min="0"
                                        pattern="^\d+$" id="number_baby"
                                        pirce-baby='{{ $data[0]->typeTour->baby_price }}'>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="methods">
                            <h3 class="title_methor">{{ __('label.booktour.payment_method') }}</h3>
                            <p>{{ __('label.booktour.choose_payment') }}</p>
                            <div class="metho">
                                <input value="1" type="radio" id="pament-method-bank" class="payment-method"
                                    name="method_payment">
                                <div class="method-content">
                                    <label class="title" for="pament-method0" id="pay_bank">
                                        <h4>{{ __('label.booktour.payment_card') }}</h4>
                                        <div class="description">{{ __('label.booktour.des1') }}</div>
                                        <i class="fa fa-chevron-down"></i>
                                        <i class="fa fa-check"></i>
                                    </label>
                                    <div class="content" id="metho_1">
                                        <h5>{{ __('tài khoản ngân hàng của saigontourist') }}</h5>
                                        <h5>{{ __('Lưu ý khi chuyển khoản:') }}</h5>
                                        <p>{{ __('Quý khách vui lòng liên hệ nhân viên tư vấn, để xác nhận số chỗ
                                            trước khi thanh toán qua ngân hàng') }}</p>
                                        <p>{{ __('Khi chuyển khoản, quý khách vui lòng nhập nội dung chuyển khoản là:') }}
                                        </p>
                                        <p>"{{ __('MDH matour, Họ tên, Noi dung thanh
                                            toan"') }}</p>
                                        <p>{{ __('VD: "MDH 0000001, Nguyen Phi Hung, TT vé tour"<') }}/p>
                                            <p>{{ __('Ðể việc thanh toán được chính xác. Xin cảm ơn quý khách!') }}</p>
                                            <p>{{ __('Thông tin tài khoản Công ty TNHH MTV DVLH Saigontourist tại ngân hàng Vietcombank
                                            TP.HCM - VCB') }}</p>
                                            <p>{{ __('Tài khoản VND: 007.100.001075.3') }}</p>
                                            <p>{{ __('Tài khoản USD: 007.137.008721.3') }}</p>
                                            <p>{{ __('Tài khoan EUR: 007.114.060551.8') }}</p>
                                            <p>{{ __('SWIFT BFTVVNVX007') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="metho">
                                <input value="1" type="radio" id="pament-method-2" class="payment-method" name="method_payment">
                                <div class="method-content">
                                    <label class="title" for="pament-method0" id="pay_off">
                                        <h4>{{ __('label.booktour.cash_payment') }}</h4>
                                        <div class="description">{{ __('label.booktour.des2') }}</div>
                                        <i class="fa fa-chevron-down"></i>
                                        <i class="fa fa-check"></i>
                                    </label>
                                    <div class="content" id="metho_2">
                                        <p>{{ __('VĂN PHÒNG SAIGONTOURIST') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book_tow">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="title_book">{{ __('label.booktour.contact') }}</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">{{ __('label.booktour.fullname') }}</label>
                                    <input type="text" name="fullname" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">{{ __('label.booktour.phone') }}</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">{{ __('label.booktour.email') }}</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">{{ __('label.booktour.address') }}</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{ __('label.booktour.content') }}</label>
                                    <textarea class="form-control" rows="5" name="content"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nex">
                        <span class="btn-back">{{ __('label.booktour.revert') }}</span>
                        <span class="btn-prev">{{ __('label.booktour.continue') }}</span>
                        <button type="submit" class="btn bn_success">{{ __('label.booktour.completed') }}</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                @if (!empty($data))
                @foreach ($data as $item)
                <div class="book_img">
                    <img src="{{ asset($item->media->link_url) }}">
                    <div class="info_book">
                        <h4>{{ $item->name }}</h4>
                        <p><i class="fa fa-barcode" aria-hidden="true"></i> Code: <span
                                class="colo">{{ $item->typeTour->tour_code }}</span></p>
                        <p><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> {{ __('label.start_day') }}: <span
                                class="colo">{{ date('d/m/Y', strtotime($item->typeTour->start_day)) }}</span></p>
                        <p><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> {{ __('label.end_day') }}: <span
                                class="colo">{{ date('d/m/Y', strtotime($item->typeTour->end_day)) }}</span></p>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: <span class="colo">{{ $item->typeTour->time }}</span>
                        </p>
                        <div class="change_book">
                            <p>{{ __('Giá người lớn: ') }}
                                <span class="price">{{ number_format($item->typeTour->adult_price, 0, ',', ',')}}
                                    {{ __('đ x 1') }}</span>
                            </p>
                        </div>
                        @if ($item->sale != 0)
                            <p> {{ __('label.sale') }}: <span class="colo">{{ $item->sale }}{{ __('%') }}</span></p>
                        @endif
                        <h5>{{ __('Tổng: ') }}
                            <span class="total_price">{{ number_format($total, 0, ',', ',') }}
                                {{ __('đ') }}</span>
                        </h5>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
