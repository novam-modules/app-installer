@extends('layouts.admin')
@section('head')
    <title>Projects {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ mix('css/projects.css') }}">
@endsection
@section('layout')
<div id="projects" class="projects">
    @yield('content')
</div>
@endsection
@section('scripts')
<script src="{{ mix('js/projects.js') }}"></script>
@endsection
