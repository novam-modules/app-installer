@extends('layouts.auth')

@section('content')
<div>{{ __('Reset Password') }}</div>
<hr />
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">\
    <div class="form-group">
        <input id="login-username" type="text" name="email" required data-msg="Please enter your username/email" class="input-material">
        <label for="login-username" class="label-material">{{ __('E-Mail Address') }}</label>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <input id="login-password" type="password" name="email" required data-msg="Please enter strong password" class="input-material">
        <label for="login-password" class="label-material">{{ __('Strong Password') }}</label>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <input id="password-confirmation" type="password" name="password_confirmation" required data-msg="Please confirm passowrd" class="input-material">
        <label for="password-confirmation" class="label-material">{{ __('Confirm Passowrd') }}</label>
        @if ($errors->has('password_confirmation'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </div>
</form>
@endsection
