<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- css boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- my fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #002530;
            margin: 0;
        }

        .container-login {
            width: 100vw;
            max-width: 100%;
            height: 100vh;
            display: flex;
        }

        .left-side {
            width: 40%;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .right-side {
            width: 60%;
            background: #002530;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }


        .login-box {
            width: 100%;
            max-width: 350px;
        }

        .btn-custom {
            width: 100%;
            background-color: #2C717C;
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #1F5A64;
        }

        .btn-outline-custom {
            width: 100%;
            color: white;
            border: 1px solid #2C717C;
        }

        .btn-outline-custom:hover {
            background-color: #2C717C;
            color: white;

        }
    </style>
</head>

<body>
    @yield('content')
    @stack('script')
</body>

</html>
