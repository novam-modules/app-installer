@extends('layouts.master')
@section('layout')

{{-- <form method="post" action="{{ user_route('settings') }}">
@csrf
@isset($Settings)
    @foreach ($Settings as $key => $value)
    <div class="form-group row">
        <div class="col-md-6">
        <label for="">{{ $key ?? '' }}: <strong>{{ $value ?? '' }}</strong></label>
        <p></p>
        </div>
    @endforeach
@endisset
<hr class="w-100">

<div class="form-group row">
  <div class="col-md-4">
    <label for="">New Setting</label>
    <input type="text" name="key" id="key" class="form-control" placeholder="" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
    <br/>
    <button type="submit" class="btn btn-primary">SUBMIT</button>
  </div>
  <div class="col-md-8">
      <textarea name="value" id="value" class="form-control" rows="5"></textarea>
  </div>
</div>
</form> --}}



<div class="card-deck login-page">
    <div class="card form-holder">
        <div class="card-body">
            @include('content.sys.settings.env', auth()->user()->account)
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
    </div>
</div>


@endsection
