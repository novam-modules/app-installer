@extends('projects::layouts.master')

@section('content')

<h1 class="title h2 d-flex align-items-center">
    <a href="/modules" class="material-icons">settings</a>
    <span class="w-100 text-center">New Project</span>
    <a href="{{ user_route('projects') }}">
        <i class="material-icons">view_list</i>
    </a>
</h1>

<div class="card">
    <div class="card-body">
        <new-job
            :jobUrl="'{{ user_route('projects') }}'">
        </new-job>
    </div>
</div>

@endsection
