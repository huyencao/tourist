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
            <a href="#" class="navbar-brand"> {{ __('Bootflat-Admin') }} </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="getting-started.html"> {{ __('Getting Started') }} </a></li>
                <li class="active"><a href="index.html"> {{ __('Documentation') }} </a></li>
                <!-- <li class="disabled"><a href="#">Link</a></li> -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"> {{ __('Silverbux') }} <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li class="dropdown-header"> {{ __('Setting') }}</li>
                        <li><a href="#">Action</a></li>
                        <li class="divider"></li>
                        <li class="active"><a href="#"> {{ __('Separated link') }}</a></li>
                        <li class="divider"></li>
                        <li class="disabled"><a href="#"> {{ __('Signout') }} </a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--header-->
