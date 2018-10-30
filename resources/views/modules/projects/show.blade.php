@extends('projects::layouts.master')

@section('content')
    <h1 class="title h2 d-flex align-items-center">
        <a href="" class="material-icons">settings</a>
        <span class="w-100 text-center">{{ $Job->name ?? "Job Title Here" }}</span>
        <a href="#add-new-job" data-toggle="modal" class="material-icons">add_circle_outline</a>
    </h1>
    <job-viewer
        :job-id="'{{ $Job->id }}'"
        :default-job='@json($Job)'>
    </job-viewer>
    <div class="card">
        <div class="card-header bg-primary">
            Work Orders
        </div>
        <div class="card-body p-0">
            <div id="accordion">
                @foreach (range(1, 4) as $num)
                    <work-order :num="{{ $num }}" :wrap="'accordion'"></work-order>
                @endforeach
            </div>
        </div>
    </div>
    <div class="clearfix my-3 py-3"><br/></div>
    <modal-viewer
        :modal-id="'add-new-job'"
        :modal-title="'Add New Job'"
        :modal-size="'modal-lg'">

    </modal-viewer>
    @stop
