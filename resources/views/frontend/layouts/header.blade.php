<header>
    <div class="head_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="left">
                        <span class="sp_email"><i class="fa fa-envelope-o"
                                aria-hidden="true"></i>{{ __('label.frontend.info') }}</span>
                        <span class="sp_hotline"><i class="fa fa-phone"></i>{{ __('label.frontend.hotline') }}</span>
                    </div>
                    <div class="rigth">
                        <p>{{ __('label.frontend.title') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav class="navbar">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand logo" href="#">
                                    <img src="{{ asset(config('app.img_frontend') . 'logo_tour.jpg') }}">
                                </a>
                            </div>
                            <div id="head-mobile"></div>
                            <div class="button"></div>
                            <nav id='cssmenu'>
                                {!! $menus !!}
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="silder">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($banner as $key => $item)
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : ''}}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($banner as $key => $item)
                <div class="item {{ $key == 0 ? 'active' : ''}}">
                    <img src="{{ asset($item['media']['link_url']) }}" title="" alt="">
                </div>
                @endforeach
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">{{ __('Previous') }}</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">{{ __('Next') }}</span>
            </a>
        </div>
    </div>
    <div class="search-container">
        <form action="#">
            <input type="text" placeholder="{{ __('Search..') }}" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>
