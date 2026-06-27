<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coming Soon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .coming-soon-container {
            max-width: 600px;
        }
        .btn-custom {
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="coming-soon-container">
        <h1 class="display-3">Coming Soon</h1>
        <p class="lead">Our website is under construction. Stay tuned for something amazing!</p>
        <div class="mt-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg btn-custom">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg btn-custom">Login</a>
                <!-- <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg btn-custom">Register</a> -->
            @endauth
        </div>
    </div>
</body>
</html>
