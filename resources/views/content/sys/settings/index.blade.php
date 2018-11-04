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
    <div class="card col-sm-12 col-md-4">
        <div class="card-body">
            <form action="">
                @include('content.sys.settings.db', auth()->user()->account)
            </form>
        </div>
    </div>
    <div class="card col-sm-12 col-md-4">
        <div class="card-body">
        </div>
    </div>
    <div class="card col-sm-12 col-md-4">
        <div class="card-body">
        </div>
    </div>
</div>


@endsection
