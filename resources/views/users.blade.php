<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="nav">
        @include('partials.dashboardnavbar')
    </div>
    <div class="dash-main">
        <div class="main">
            <div class="header">
                <p class="body-title">User Information</p>
            </div>
            <div class="user-holder">
                <div class="info">
                    <img src="{{ asset('img/admin.svg') }}" alt="">
                    <p>Admin</p>
                </div>
                <p class="name">Pak Sidik</p>
            </div>
            <div class="user-holder">
                <div class="info">
                    <img src="{{ asset('img/professor.svg') }}" alt="">
                    <p>Professor</p>
                </div>
                <p class="name">Pak Arseto</p>
            </div>
            <div class="user-holder">
                <div class="info">
                    <img src="{{ asset('img/student.svg') }}" alt="">
                    <p>Student</p>
                </div>
                <p class="name">Kaffa</p>
            </div>
        </div>
    </div>
</body>
</html>
