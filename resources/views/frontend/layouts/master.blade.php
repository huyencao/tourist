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
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/css/owl.carousel.min.css') }}">
</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/jquery-3.2.1.slim.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/lib_bower/Frontend/js/main.js') }}" type="text/javascript"></script>
</body>

</html>
