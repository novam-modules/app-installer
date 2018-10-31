<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    @yield('styles')
    @stack('styles')
</head>

<body>
<div class="page">
    @include('_partials.main.header')
    <div class="page-content d-flex align-items-stretch">
        @include('_partials.main.sidenav')
        <div class="content-inner px-3">
        @hasSection('layout')
            @yield('layout')
        @else
            @yield('content')
        @endif
        @include('_partials.main.footer')
        </div>
    </div>
</div>

<script src="{{ mix('js/main.js') }}"></script>
@yield('scripts')
@stack('scripts')
</body>

</html>
