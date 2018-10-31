@extends('projects::layouts.master')

@section('content')
<h1 class="title h2 d-flex align-items-center">
    <a href="/modules" class="material-icons">settings</a>
    <span class="w-100 text-center">Projects</span>
    <a href="{{ user_route('projects/create') }}"
        class="material-icons">
        add_circle_outline
    </a>
</h1>
<hr>
<div class="table-responsive">
    <table class="table table-hover table-sm datatable border shadow mb-3">
        <thead class="text-success">
            <tr>
                <th>
                    <input type="checkbox" name="ids">
                </th>
                <th>Job</th>
                <th>Customer</th>
                <th>Manager</th>
                <th>Estimator</th>
                <th>Submitted</th>
                <th>Status</th>
            </tr>
    </thead>
        <tbody>
            @php
                //$Jobs = Modules\Projects\Models\Job::all()->take(100);
                $success = ['active','pending','complete'];
                $class = ['success', 'warning', 'primary'];
            @endphp
            @foreach($Jobs as $job)
            <tr>
                <td>
                    <input type="checkbox" name="id"/>
                </td>
                <td>
                    <a href="/modules/projects/{{ $job->id }}">{{ $job->name }}</a>
                </td>
                <td>{{$job->customer->name ?? ""}}</td>
                <td>{{$job->manager->name ?? ""}}</td>
                <td>{{$job->estimator->name ?? ""}}</td>
                <td>{{$job->created_at }}</td>
                <td>
                    <span class="badge p-1 btn-block badge-{{$class[$n = mt_rand(0,2)]}}">
                        {{$success[$n]}}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
