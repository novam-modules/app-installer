@extends('layouts.auth')

@section('content')
<h3>{{ __('Registration') }}</h3>
<hr />
<form class="form-validate" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <input id="empno" type="text" name="empno" required data-msg="Please enter your username"
            class="input-material">
        <label for="empno" class="label-material">User Name</label>
        @if ($errors->has('empno'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('empno') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <input id="register-email" type="email" name="registerEmail" required data-msg="Please enter a valid email address"
            class="input-material">
        <label for="register-email" class="label-material">Email Address </label>
    </div>
    <div class="form-group">
        <input id="register-password" type="password" name="registerPassword" required
            data-msg="Please enter your password" class="input-material">
        <label for="register-password" class="label-material">password </label>
    </div>
    <div class="form-group terms-conditions">
        <input id="register-agree" name="registerAgree" type="checkbox" required value="1"
            data-msg="Your agreement is required" class="checkbox-template">
        <label for="register-agree">Agree the terms and policy</label>
    </div>
    <div class="form-group">
        <button id="regidter" type="submit" name="registerSubmit" class="btn btn-primary">Register</button>
    </div>
</form>
<hr />
<small>Already have an account? </small><a href="{{ route('login') }}" class="signup">Login</a>

@endsection
