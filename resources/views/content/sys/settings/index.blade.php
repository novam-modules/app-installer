@extends('layouts.master')
@section('layout')

<form method="post" action="{{ user_route('settings')">
@csrf

@php
    dump($Configs);
@endphp
<button>SUBMIT</button>
</form>

@endsection
