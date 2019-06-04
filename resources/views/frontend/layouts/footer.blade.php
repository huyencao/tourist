<footer>
    <div class="container-fluid">
        <div class="payment">
            <div class="row">
                <div class="col-xs-12">
                    <h3>{{ __('label.frontend.accept_payment') }}</h3>
                </div>
                <div class="col-xs-12">
                    <div class="pay_sub">
                        <ul>
                            <li><img src="{{ asset(config('app.img_pay') . '1.jpg') }}" alt="{{ __('vietcombank') }}"></li>
                            <li><img src="{{ asset(config('app.img_pay') . '2.jpg') }}"></li>
                            <li><img src="{{ asset(config('app.img_pay') . '3.jpg') }}"></li>
                            <li><img src="{{ asset(config('app.img_pay') . '4.jpg') }}"></li>
                            <li><img src="{{ asset(config('app.img_pay') . '5.jpg') }}"></li>
                            <li><img src="{{ asset(config('app.img_pay') . '6.jpg') }}"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a href=""><img class="logo" src="{{ asset(config('app.img_frontend') . 'logo_tour.jpg') }}"
                            alt="logo"></a>
                    <p>{{ __('label.frontend.description') }}</p>
                    <img class="bct" src="{{ asset(config('app.img_frontend') . 'ndth.png') }}" alt="">
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box_footer">
                        <h3>{{ __('label.frontend.active') }}</h3>
                        <ul>
                            <li></i>{{ __('label.frontend.active1') }}</li>
                            <li></i>{{ __('label.frontend.active2') }}</li>
                            <li></i>{{ __('label.frontend.active3') }}</li>
                            <li></i>{{ __('label.frontend.active4') }}</li>
                            <li></i>{{ __('label.frontend.active5') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box_footer">
                        <h3>{{ __('label.frontend.information') }}</h3>
                        <ul>
                            <li>{{ __('label.frontend.information1') }}</li>
                            <li>{{ __('label.frontend.information2') }}</li>
                            <li>{{ __('label.frontend.information3') }}</li>
                            <li>{{ __('label.frontend.information4') }}</li>
                            <li>{{ __('label.frontend.information5') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box_support">
                        <p>{{ __('label.frontend.resgister_price') }}</p>
                        <form action="" method="POST">
                            <input type="email" name="email" placeholder="{{ __('Email') }}">
                            <button type="submit" class="btn btn-success"></button>
                        </form>
                    </div>
                    <div class="face_book">
                        <img src="{{ asset(config('app.img_frontend') . 'facebook.png') }}">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="footer_center">
                        <h2>{{ __('label.frontend.name') }}</span></h2>
                        <p>{{ __('label.frontend.address') }}</p>
                        <p>{{ __('label.frontend.passport') }}</p>
                        <p>{{ __('label.frontend.tax_code') }}</p>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="footer_center">
                        <h2>{{ __('label.frontend.transaction_hn') }}</h2>
                        <p>{{ __('label.frontend.address2') }}</p>
                        <p>{{ __('label.frontend.phone') }}</p>
                        <p>{{ __('label.frontend.hotline') }}</p>
                        <p>{{ __('label.frontend.email') }}</p>
                        <p>{{ __('label.frontend.website') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
