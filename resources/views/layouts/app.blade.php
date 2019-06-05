<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title></title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/auth/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/lib_bower/Frontend/auth/css/font-awesome.min.css') }}">
</head>

<body>
    @yield('content')
    @stack('scripts')
</body>

</html>
