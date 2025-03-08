@extends('layouts.app')
@section('title')
    Register Page
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
            <h2>REGISTER PIONIR</h2>
            <p>Please enter your identity</p>
            <!-- Form 1 (Identitas) -->
            <div class="login-box" id="form-step-1">
                <form id="registerForm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" class="form-control" name="NIM" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phonenumber" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Study</label>
                        <input type="text" class="form-control" name="programstudy" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" required>
                    </div>
                    <button type="button" class="btn btn-custom mt-2" onclick="nextStep()">Next</button>
                </form>
            </div>

            <!-- Form 2 (Username & Password) -->
            <div class="login-box" id="form-step-2" style="display: none;">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="button" class="btn btn-secondary mt-2" onclick="prevStep()">Back</button>
                    <button type="submit" class="btn btn-custom mt-2">Done</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function nextStep() {
            document.getElementById("form-step-1").style.display = "none";
            document.getElementById("form-step-2").style.display = "block";
        }

        function prevStep() {
            document.getElementById("form-step-1").style.display = "block";
            document.getElementById("form-step-2").style.display = "none";
        }
    </script>
@endsection
