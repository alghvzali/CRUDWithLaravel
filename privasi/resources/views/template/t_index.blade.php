<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Webapp Sederhana</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
</head>
<style>
    .judul-navbar span {
        font-family: 'Yesteryear', cursive;
        color: wheat !important;
        font-size: 30px !important;
        text-shadow: 0px 0px 0px;
        transition: all 2s ease;
    }
    .judul-navbar span:hover {
        text-shadow: 8px 16px 6px black;
    }
</style>
<body>
<nav class="navbar judul-navbar navbar-light">
    <div class="container">
    <span class="navbar-brand">webapp sederhana</span>
</nav>
    @yield('content')

    <script src="{{ asset('assets/js/jquery-3.3.1.min.css')}}">
    <script src="{{ asset('assets/js/bootstrap.min.css')}}">
</body>
</html>