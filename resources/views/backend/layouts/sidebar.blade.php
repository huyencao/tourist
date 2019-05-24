<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
    <ul class="list-group panel">
        <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b> {{ __('DANH MỤC QUẢN
                LÝ') }} </b></li>
        <li class="list-group-item"><a href="{{ route('dashboard') }}"><i class="glyphicon glyphicon-home"></i> {{ __('Trang chủ') }}
            </a></li>
        </li>
        <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-th-list"></i> {{ __('Menu') }} </a>
        </li>
        <li class="list-group-item"><a href="{{ route('banner.index') }}"><i class="fa fa-picture-o"></i>{{ __('Banner') }}</a></li>
        <li class="list-group-item"><a href="{{ route('catetour.index') }}"><i class="fa fa-picture-o"></i> {{ __('Category Tour') }} </li>
        <li class="list-group-item"><a href="#"><i class="fa fa-list"></i> {{ __('Tour') }} </li>
        <li class="list-group-item"><a href="{{ route('catenews.index') }}"><i class="fa fa-book"></i> {{ __('Categorynews') }} </a></li>
        <li class="list-group-item"><a href="#"><i class="fa fa-list"></i> {{ __('News') }} </a>
        <li class="list-group-item"><a href="{{ route('media.index') }}"><i class="fa fa-list"></i> {{ __('Media') }} </a>
        </li>
        <li class="list-group-item"><a href="{{ route('user.index') }}"><i class="fa fa-user"></i> {{ __('Quản lý User') }} </a></li>
    </ul>
</div>
