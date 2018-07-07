<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>

        <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
        <meta property="og:image" content="/images/logo.png">
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:type" content="website">

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> --}}

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <noscript><link rel="stylesheet" href="{{ mix('/css/noscript.css') }}"></noscript>
    </head>
    <body>

            <div id="app"></div>

            {{-- @include('includes.sidebar')

            @yield('content')

            @include('includes.footer') --}}

        <!-- Scripts -->
        <script src="{{ mix('/js/manifest.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
