<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <title>Portfolio | @yield('title')</title>
</head>
<body>
    @guest
        @include('layout.navbar')
    @endguest
    @yield('content')
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    @yield('js')
</body>
</html>
