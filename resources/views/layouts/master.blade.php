<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>{{ $title ?? config('app.name') }}</title> @yield('styles')
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    @yield('styles')
    @stack('styles')
</head>

<body>
    @hasSection('layout')
        @yield('layout')
    @else
        @yield('content')
    @endif

    <script src="{{ mix('js/main.js') }}"></script>
    @yield('scripts')
    @stack('scripts')
</body>

</html>
