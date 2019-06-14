<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
    <ul class="list-group panel">
        <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i><b>{{ __('label.list_manage') }}</b></li>
        <li class="list-group-item"><a href="{{ route('dashboard') }}"><i class="glyphicon glyphicon-home"></i>{{ __('Trang chủ') }}
            </a></li>
        </li>
        <li class="list-group-item"><a href="{{ route('menu.index') }}"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>{{ __('label.menu') }}</a>
        </li>
        <li class="list-group-item"><a href="{{ route('banner.index') }}"><i class="fa fa-sliders" aria-hidden="true"></i>{{ __('label.banner.list') }}</a></li>
        <li class="list-group-item"><a href="{{ route('catetour.index') }}"><i class="fa fa-outdent" aria-hidden="true"></i>{{ __('label.categorytour') }}</li>
        <li class="list-group-item"><a href="{{ route('tour.index') }}"><i class="fa fa-plane" aria-hidden="true"></i>{{ __('label.tour') }}</li>
        <li class="list-group-item"><a href="{{ route('catenews.index') }}"><i class="fa fa-bars" aria-hidden="true"></i>{{ __('label.cate_news') }}</a></li>
        <li class="list-group-item"><a href="{{ route('news.index') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>{{ __('label.news') }}</a>
        <li class="list-group-item"><a href="{{ route('media.index') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>{{ __('label.media') }}</a>
        </li>
        <li class="list-group-item"><a href="{{ route('review.index') }}"><i class="fa fa-star-half-o" aria-hidden="true"></i>{{ __('label.review') }}</a></li>
        <li class="list-group-item"><a href="{{ route('user.index') }}"><i class="fa fa-user" aria-hidden="true"></i>{{ __('label.user_title') }}</a></li>
        <li class="list-group-item"><a href="{{ route('ordertour.index') }}"><i class="fa fa-sort" aria-hidden="true"></i>{{ __('label.order_tour') }}</a></li>
    </ul>
</div>
