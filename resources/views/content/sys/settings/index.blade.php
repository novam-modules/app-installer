@extends('layouts.master')
@section('layout')

<form method="post" action="{{ user_route('settings')">
@csrf

@php
    dump($Configs);
@endphp
<div class="container">
    <form>
        <div class="form-group row">
            <label for="inputName" class="col-sm-12 col-form-label"></label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="key" id="set-key" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-12 col-form-label"></label>
            <div class="col-sm-12">
                <textarea class="form-control" name="key" id="set-key" placeholder="">
            </div>
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Action</button>
            </div>
        </div>
    </form>
</div>
<button>SUBMIT</button>
</form>

@endsection
