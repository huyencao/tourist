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
            <a href="#" class="active">{{ ('Xin chào Admin') }}</a>
            <button class="dropbtn">{{ __('Setting') }}</button>
            <ul class="dropdown-content">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">{{ __('Logout') }}</button>
                    </form>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<!--header-->
