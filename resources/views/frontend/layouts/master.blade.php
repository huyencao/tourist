<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <meta name=description content="">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/owl.carousel.min.css') }}">
</head>

<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    <script lang="javascript">var _vc_data = {id : 3837322, secret : '426444e5711839b57e839e8e9d23d876'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//live.vnpgroup.net/client/tracking.js?id=3837322';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/jquery-3.2.1.slim.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/bootstrap.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/owl.carousel.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/bloodhound.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/typeahead.bundle.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/typeahead.bundle.min.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/tour.js') }}"></script>
    @stack('scripts')
</body>

</html>
