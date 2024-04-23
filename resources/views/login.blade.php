<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div class="elements">
    <div class="navbar-holder">
        @include('partials.navbar')
    </div>
    <div class="login-holder">
        <div class="login">
            <p class="welcome-text">Sign in</p>
            <input class="input" type="text" placeholder="Email">
            <input class="input" type="text" placeholder="Password">
            <div class="button-holder">
                <button class="login-button">Login</button>
                <button class="signup-button">Sign up</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>