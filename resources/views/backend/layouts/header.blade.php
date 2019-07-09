<nav role="navigation" class="navbar navbar-custom">
    <div class="container-fluid">
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
        <div class="menu-notifications">
            <span class="notification-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
            <i class="notification-holder m-menu__link-icon flaticon-music-2">
                <span class="count-notification-circle">0</span></i>
            <div class="dropdown-content">
                <ul class="dropdown-notifications">
                    <li class="dropdown-notifications-item">
                    </li>
                </ul>
            </div>
        </div>
        @if (Auth::check())
        <div class="user-admin">
            <a href="#" class="active">{{ Auth::user()->username }}</a>
            <div class="logout">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </div>
        @endif
    </div>
</nav>