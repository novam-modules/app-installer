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
    @component('_partials.main.alerts')

    @endcomponent
    <div class="page">
        @include('_partials.main.header')
        <div class="page-content d-flex align-items-stretch">
            @unless(request()->is("*my*"))
            @can('view-dashboard')
            @include('_partials.main.sidenav')
            @endcan
            @endunless
            <div class="{{ request()->is('*my*')? 'container-fluid': 'content-inner' }}">
                @hasSection('layout')
                @yield('layout')
                @else
                @yield('content')
                @endif
                @unless(request()->is("*my*"))
                @include('_partials.main.footer')
                @endunless
            </div>
        </div>
    </div>

    <script src="{{ mix('js/main.js') }}"></script>
    @yield('scripts')
    @stack('scripts')
</body>

</html>
