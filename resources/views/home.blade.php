<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home</title>
</head>
<body>
    {{-- pembagian kelas grid--}}
    <div class="website-body">
        {{-- bagian header --}}
        <div class="header">
            <div class="navbar">
                <div class="logo">
                    <img src="{{ asset('img/logoUndip.png') }}" class="logoUndip" alt="">
                    <div class="logoTextContainer">
                        <p class="logoText">FAKULTAS TEKNIK</p>
                        <p class="logoText">UNIVERSITAS DIPONEGORO</p>
                    </div>
                </div>
                <div class="navbarMenu">
                    <div class="navbarMenuOpt">
                        <p>Room Information</p>
                    </div>
                    <div class="navbarMenuOpt">
                        <p>Calendar</p>
                    </div>
                    <div class="navbarMenuOpt">
                        <p>Administrator</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- grid tabel --}}
        <div class="main">
            @include('partials.tables')
        </div>
        {{-- grid search bar & calendar --}}
        <div class="secondary">
            <input class="search-bar" type="text">
            @include('partials.calendar')
            <div class="categories">
                <p class="cat-title">Categories</p>
                <div class="cat-holder">
                    <p class="cat-text">External</p>
                    <div class="cat-exter"></div>
                </div>
                <div class="cat-holder">
                    <p class="cat-text">Internal</p>
                    <div class="cat-inter"></div>
                </div>
                <div class="cat-holder">
                    <p class="cat-text">Maintanance</p>
                    <div class="cat-maint"></div>
                </div>
                <div class="cat-holder">
                    <p class="cat-text">Zoom</p>
                    <div class="cat-zoom"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>