<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .pt-4, .py-4 {
            padding-top: 0rem !important;
        }
        .navbar-laravel{
            margin-bottom: 2%;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('inc/navbar')
            <div class="container">
            @include('inc.messages')
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
