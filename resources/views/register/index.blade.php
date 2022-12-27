@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <form>
                <h1 class="h3 mb-3 fw-normal ">Registration Form</h1>
        
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                
                <div class="form-floating mt-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="username">Username</label>
                </div>
        
                <div class="form-floating mt-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email Address</label>
                </div>
        
        
                <div class="form-floating mt-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                <small class="d-block text-center mt-3">Already Register? <a href="/login">Login</a></small>
            </form>
        </main>
    </div>
</div>


@endsection