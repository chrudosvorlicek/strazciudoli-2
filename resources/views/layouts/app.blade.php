<!doctype html>
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
    <link href="/fonts/Aclonica-regular.ttf">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light">
        @include('pieces.loginNavBar')
    </nav>
    <main class="container page">
        <div class="page-inner">

            <header class="page-header">
                <a href="{{ route('home') }}" class="a-black">
                    <img src="{{ asset('images/logo_woodcraft.gif') }}">
                    <span class="header-llm-text">Liga lesní moudrosti</span>
                    <h1>Kmen Strážců údolí</h1>
                </a>
            </header>
            @if(Route::is('home'))
                @include('about.short')
            @endif

            @include('pieces.menu')
            @include('flash::message')
            @yield('content')
            <footer class="page-footer">
                <div class="page-footer-text">
                    <div class="footer-llm-text">Liga lesní moudrosti</div>
                    <div class="footer-llm-text">Kmen Strážců údolí</div>
                </div>
            </footer>
        </div>
    </main>
</div>
</body>
</html>
