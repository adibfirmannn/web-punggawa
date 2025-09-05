@extends('layouts.app')

@section('content')
    <div class="container-fluid vh-100 d-flex flex-column flex-md-row">
        <!-- Logo untuk mobile -->
        <div class="d-md-none w-100 bg-[#032B3A] text-center">
            <img src="{{ 'img/Punggawa_icon.png' }}" alt="Logo"
                style="max-width: 200px; height: auto; margin-top: 80px; margin-bottom: 20px;  ">
        </div>

        {{-- Kiri (Logo) --}}
        <div class="col-md-6 bg-white d-none d-md-flex justify-content-center align-items-center p-4">
            <div class="text-center">
                <img src="{{ asset('img/punggawa_logos.png') }}" alt="Punggawa Inspiratif" class="img-fluid mb-2 animate__animated animate__pulse animate__slow animate__infinite w-32"
                    style="max-width: 250px;">
            </div>
        </div>

        {{-- Kanan (Form) --}}
        <div class="col-md-6 d-flex justify-content-center align-items-center bg-[#032B3A] text-white p-4">
            <div class="w-100" style="max-width: 400px;">
                <h2 class="text-center fw-bold">WELCOME BACK</h2>
                <p class="text-center small mb-4">Please enter your identity</p>
                <form id="registerForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div id="step2">
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirm Password" required>
                        </div>
                        <div class="d-flex flex-column justify-content-center gap-2">
                            <button type="submit" class="btn btn-info rounded-pill"
                                style="color:white ;background-color: #2C717C; transition: background-color 0.3s ease;"
                                onmouseover="this.style.backgroundColor='#245E66'"
                                onmouseout="this.style.backgroundColor='#2C717C'">Log In</button>
                            <button type="button" onclick="window.location.href='{{ route('register') }}'"
                                class="rounded-pill px-4 py-2 rounded border border-success text-white bg-transparent transition" onmouseover="this.style.backgroundColor='#245E66'">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
