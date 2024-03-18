<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENFTX - NFT Dashboard HTML Template</title>
    <meta name="description"
        content="ENFTX is the complete UX & UI dashboard for NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc.">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="@@dashboard">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>
    <div id="main-wrapper">
    @include('layouts.nav-dash')
        @yield('content')
    </div>
    </div>
</body>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/chartjs/chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/plugins/chartjs-line-init.js') }}"></script>
<script src="{{ asset('js/plugins/chartjs-donut.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

</html>
