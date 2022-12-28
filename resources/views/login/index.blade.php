@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>

<div class="login-body">
    <div class="box">
        <div class="form">
            <form action="/login" method="post">
                @csrf
                <h2>
                    Sign in
                </h2>
                <div class="inputBox">
                    <input type="email" name="email" id="email" autofocus required="required" class="@error ('email') is-invalid @enderror" value="{{ old('email') }}">
                        <span>Email</span>
                        <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" id="password" required="required">
                        <span>Password</span>
                        <i></i>
                </div>
                <div class="links">
                    <a href="#">Forgot Password</a>
                    <a href="/register">Register</a>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</div>


@endsection