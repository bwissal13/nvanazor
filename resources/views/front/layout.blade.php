<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeMarch">
    <title>ANAZOR</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @include('layouts.nav-front')
    @yield('content')


    <script src="{{ asset('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.pkg.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
