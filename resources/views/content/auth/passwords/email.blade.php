@extends('layouts.auth')

@section('content')
<h3>{{ __('Reset Password') }}</h3>
<hr/>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
        <input id="login-username" type="text" name="email" required data-msg="Please enter your username/email" class="input-material">
        <label for="login-username" class="label-material">{{ __('E-Mail Address') }}</label>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="text-center"> - OR - </div>
    <div class="form-group">
        <input id="login-username" type="text" name="phone" required data-msg="Please enter your username/email" class="input-material">
        <label for="login-username" class="label-material">{{ __('Smart Phone #') }}</label>
        @if ($errors->has('phone'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </div>
</form>
<hr/>
<small>Already have an account? </small><a href="{{ route('login') }}" class="signup">Login</a>
@endsection
