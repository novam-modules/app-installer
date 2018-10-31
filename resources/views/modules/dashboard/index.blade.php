@extends('dashboard::layouts.master')
@section('content')

<div class="my-3 py-3">
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <div class="box">
                <a href="/admin/timetrack" class="icon btn btn-outline-primary">
                                <i class="material-icons md-48">access_time</i>
                            </a>
                <div class="content">
                    <h4 class="title">Time Card</h4>
                    <hr>
                    <a href="/" class="action">Clock In</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="box">
                <a href="/admin/projects" class="icon btn btn-outline-primary">
                                    <i class="material-icons md-48">view_list</i>
                                </a>
                <div class="content">
                    <h4 class="title">Projects</h4>
                    <hr>
                    <a href="/" class="action">New Job</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-3">
                <div class="box">
                    <a href="{{$emp='/admin/personell'}}" class="icon btn btn-outline-primary">
                            <i class="material-icons md-48">supervisor_account</i>
                        </a>
                    <div class="content">
                        <h4 class="title">Personell</h4>
                        <hr>
                        <a href="{{$emp.'/employees'}}" class="action">Employees</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="box">
                    <a href="/admin/inventory" class="icon btn btn-outline-primary">
                            <i class="material-icons md-48">view_list</i>
                        </a>
                    <div class="content">
                        <h4 class="title">Inventory</h4>
                        <hr>
                        <a href="/" class="action">Fleet</a>
                        <a href="/" class="action">Materials</a>
                    </div>
                </div>
            </div>

        @foreach (range(1, 5) as $item)
        {{--  <div class="col-md-4 col-lg-3">
            <div class="box">
                <a href="/admin/projects" class="icon btn btn-outline-primary">
                        <i class="material-icons md-48">view_list</i>
                    </a>
                <div class="content">
                    <h4 class="title">Projects</h4>
                    <hr>
                    <a href="/" class="action">New Job</a>
                </div>
            </div>
        </div>  --}}
        @endforeach
        <div class="col-md-4 col-lg-3">
            <div class="box">
                <a href="/admin/business" class="icon btn btn-outline-primary">
                        <i class="material-icons md-48">location_city</i>
                    </a>
                <div class="content">
                    <h4 class="title">Business</h4>
                    <hr>
                    <a href="/" class="action">Add New</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="box">
                <a href="/admin/projects" class="icon btn btn-outline-primary">
                        <i class="material-icons md-48">announcement</i>
                    </a>
                <div class="content">
                    <h4 class="title">Announcements</h4>
                    <hr>
                    <a href="/" class="action">Clock In</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="box">
                <a href="/admin/calendar" class="icon btn btn-outline-primary">
                    <i class="material-icons md-48">event</i>
                </a>
                <div class="content">
                    <h4 class="title">Calendar</h4>
                    <hr>
                    <a href="/" class="action">Today</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="box">
                <a href="/admin/projects" class="icon btn btn-outline-primary">
                        <i class="material-icons md-48">settings</i>
                    </a>
                <div class="content">
                    <h4 class="title">Settings</h4>
                    <hr>
                    <a href="/" class="action">System</a>
                    |
                    <a href="/" class="action">Personal</a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
