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
@include('content.sys.settings.env', auth()->user()->account)
@endsection
