<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
    <ul class="list-group panel">
        <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i><b>{{ __('DANH MỤC QUẢN
                LÝ') }}</b></li>
        <li class="list-group-item"><a href="{{ route('dashboard') }}"><i class="glyphicon glyphicon-home"></i>{{ __('Trang chủ') }}
            </a></li>
        </li>
        <li class="list-group-item"><a href="#"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>{{ __('Menu') }}</a>
        </li>
        <li class="list-group-item"><a href="{{ route('banner.index') }}"><i class="fa fa-sliders" aria-hidden="true"></i>{{ __('Banner') }}</a></li>
        <li class="list-group-item"><a href="{{ route('catetour.index') }}"><i class="fa fa-outdent" aria-hidden="true"></i>{{ __('Category Tour') }}</li>
        <li class="list-group-item"><a href="{{ route('tour.index') }}"><i class="fa fa-plane" aria-hidden="true"></i>{{ __('Tour') }}</li>
        <li class="list-group-item"><a href="{{ route('catenews.index') }}"><i class="fa fa-bars" aria-hidden="true"></i>{{ __('Categorynews') }}</a></li>
        <li class="list-group-item"><a href="{{ route('news.index') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>{{ __('News') }}</a>
        <li class="list-group-item"><a href="{{ route('media.index') }}"><i class="fa fa-list"></i><i class="fa fa-picture-o" aria-hidden="true"></i>{{ __('Media') }}</a>
        </li>
        <li class="list-group-item"><a href="{{ route('review.index') }}"><i class="fa fa-star-half-o" aria-hidden="true"></i>{{ __('label.review') }}</a></li>
        <li class="list-group-item"><a href="{{ route('user.index') }}"><i class="fa fa-user" aria-hidden="true"></i>{{ __('label.user_title') }}</a></li>
    </ul>
</div>
