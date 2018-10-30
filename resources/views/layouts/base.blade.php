<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>{{ $title ?? config('app.name') }}</title>    @yield('styles')
    @stack('styles')
</head>

<body>
    @yield('content')

    @yield('scripts')
    @stack('scripts')
</body>
</html>
