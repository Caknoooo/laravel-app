@extends('layouts.main')

@section('container')

<div class="login-body">
    <div class="box">
        <div class="form">
            <h2>
                Sign in
            </h2>
            <div class="inputBox">
                <input type="text" required="required">
                 <span>Username</span>
                 <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required">
                 <span>Password</span>
                 <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="/register">Register</a>
            </div>
            <input type="submit" value="Login">
        </div>
    </div>
</div>

@endsection