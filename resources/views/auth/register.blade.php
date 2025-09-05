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
                <h2 class="text-center fw-bold">REGISTER PIONIR</h2>
                <p class="text-center small mb-4">Please enter your identity</p>

                <form id="registerForm" method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Step 1 --}}
                    <div id="step1">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="nim" class="form-control" placeholder="NIM" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="program" class="form-control" placeholder="Program Study" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="angkatan" class="form-control" placeholder="Angkatan" required>
                        </div>
                        <button type="button" onclick="nextStep()" class="btn w-100 rounded-pill"
                            style="color:white ;background-color: #2C717C; transition: background-color 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#245E66'"
                            onmouseout="this.style.backgroundColor='#2C717C'">Next</button>
                        <button type="button" onclick="window.location.href='{{ route('login') }}'"
                            class="rounded-pill mt-2 p-2 w-100 rounded border border-success text-white bg-transparent transition"
                            onmouseover="this.style.backgroundColor='#245E66'">
                            Back
                        </button>
                    </div>

                    {{-- Step 2 --}}
                    <div id="step2" class="d-none">
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
                        <div class="d-flex justify-content-between">
                            <button type="button" onclick="prevStep()"
                                class="rounded-pill px-4 py-2 rounded border border-success text-white bg-transparent transition"
                                onmouseover="this.style.backgroundColor='#245E66'">
                                Back
                            </button>
                            <button type="submit" class="btn btn-info rounded-pill"
                                style="color:white ;background-color: #2C717C; transition: background-color 0.3s ease;"
                                onmouseover="this.style.backgroundColor='#245E66'"
                                onmouseout="this.style.backgroundColor='#2C717C'">Done</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Script untuk handle step --}}
    <script>
        function nextStep() {
            document.getElementById("step1").classList.add("d-none");
            document.getElementById("step2").classList.remove("d-none");
        }

        function prevStep() {
            document.getElementById("step2").classList.add("d-none");
            document.getElementById("step1").classList.remove("d-none");
        }
    </script>
@endsection
