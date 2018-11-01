@extends('layouts.auth')

@section('content')
<h3>{{ __('Registration') }}</h3>
<hr />
<form class="form-validate ajax-form" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="form-group">
        <input id="name" type="text" name="name" required data-msg="Please enter company name"
            class="input-material">
        <label for="name" class="label-material">Company Name</label>
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
    {{--  <div class="form-group">
        <input id="name" type="text" name="fein" required data-msg="Please enter company name"
            class="input-material">
        <label for="fein" class="label-material">FEIN/TIN</label>
        @if ($errors->has('fein'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('fein') }}</strong>
        </span>
        @endif
    </div>  --}}
    <div class="form-group">
        <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address"
            class="input-material">
        <label for="register-email" class="label-material">Company E-mail </label>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <input id="register-password" type="password" name="password" required
            data-msg="Please enter a strong password" class="input-material">
        <label for="register-password" class="label-material">Password </label>
    </div>
    <div class="form-group">
        <input id="register-password" type="password" name="password_confirmation" required data-msg="Please re-enter above password"
            class="input-material">
        <label for="register-password" class="label-material">Password </label>
    </div>
    <div class="form-group terms-conditions">
        <input id="register-agree" name="agree" type="checkbox" required value="true"
            data-msg="Your agreement is required" class="checkbox-template">
        <label for="register-agree">Agree the terms and policy</label>
    </div>
    <div class="form-group">
        <button id="register" type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
<hr />
<small>Already have an account? </small><a href="{{ route('login') }}" class="signup">Login</a>

@endsection
