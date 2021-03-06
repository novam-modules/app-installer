@extends('layouts.auth')

@section('content')
<h3>{{ __('Authorized Users') }}</h3>
<hr />
<form method="POST" class="form-validate" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <input id="login-username" type="text" name="email" required data-msg="Please enter your username/email" class="input-material">
        <label for="login-username" class="label-material">User Name</label>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <input id="login-password" type="password" name="password" required data-msg="Please enter your password"
            class="input-material">
        <label for="login-password" class="label-material">Password</label>
    </div>
    <div class="form-group terms-conditions">
        <input id="remember-me" name="remember" type="checkbox" value="true"
            class="checkbox-template">
        <label for="remember-me">Remember me</label>
    </div>
    <button id="login" type="submit" class="btn btn-primary">Login</button>
</form>
<hr />
<small>Forgot login credentials? </small>
<a href="/password/reset" class="forgot-pass">Reset</a>
<br />
<small>Do not have an account? </small>
<a href="{{ route('register') }}" class="signup">Signup</a>

@endsection
