<!DOCTYPE html>
<html>

<head>
    <title> @yield('title') </title>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/lib_bower/Backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/lib_bower/Backend/dist/css/site.min.css') }}">
</head>
<body>

    @include('backend.layouts.header')

    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
            @include('backend.layouts.sidebar')
            @yield('content')
        </div>
    </div>
    @include('backend.layouts.footer')
</body>
<script type="text/javascript" src="{{ asset('bower_components/lib_bower/Backend/js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/lib_bower/Backend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/lib_bower/Backend/dist/js/site.min.js') }}"></script>
<script src="{{ asset('bower_components/lib_bower/Backend/ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('editor1'); </script>
<script src="{{ asset('bower_components/lib_bower/Backend/ckfinder/ckfinder.js') }}"></script>
@stack('scripts')
</html>
