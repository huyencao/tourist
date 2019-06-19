<!--nav-->
<nav role="navigation" class="navbar navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle"
                type="button">
                <span class="sr-only"> {{ __('Toggle navigation') }} </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('dashboard') }}" class="navbar-brand"> {{ __('Tourist') }} </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="dropdown">
            <a href="#" class="active">{{ Auth::user()->username }}</a>
            <button class="dropbtn">{{ __('Setting') }}</button>
            <ul class="dropdown-content">
                @if (Auth::check())
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
