@extends('layouts.app')
@section('title')
    Login Page
@endsection
@section('content')
    <div class="container-login">
        <!-- Bagian Kiri -->
        <div class="left-side">
            <img src="{{ asset('img/punggawa.png') }}" alt="Logo" width="120">
            <h3 class="mt-3">PUNGGAWA</h3>
            <h5 class="text-warning">INSPIRATIF</h5>
        </div>

        <!-- Bagian Kanan -->
        <div class="right-side">
            <h2>WELCOME BACK</h2>
            <p>Please enter your identity</p>
            <div class="login-box">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-custom mt-2">Log In</button>
                    <button type="button" class="btn btn-outline-custom mt-2">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
