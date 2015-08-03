@extends('master')

@section('content')
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-group">
        <label>Email Address</label>
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>
@stop