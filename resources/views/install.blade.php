@extends('layouts.auth')

@section('content')
<h2>Welcome to {{ config('app.name') }}</h2>
@if (session('status'))
<hr>
@foreach (session('status') as $type => $message)
<div class="alert alert-{{$type}}" role="alert">
    {{ $message }}
</div>
@endforeach
<hr>
@endif
@can('view-dashboard')
    @include('content.sys.settings.env', auth()->user()->account)
@else
    <p>
        Your system is not yet set up or is undergoing maintenance.
        You can <a href="/my/dashboard">go to your dashboard</a>
    </p>
@endcan

@endsection
