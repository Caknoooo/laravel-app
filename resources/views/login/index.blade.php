@extends('layouts.main')

@section('container')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show " role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

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