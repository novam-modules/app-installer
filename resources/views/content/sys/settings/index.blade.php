@extends('layouts.master')
@section('layout')

<form method="post" action="{{ user_route('settings')">
@csrf

@php

@endphp
<button>SUBMIT</button>
</form>

@endsection
