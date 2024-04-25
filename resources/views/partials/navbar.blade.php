<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
            <img class="navbar-icon-image" src="{{ asset('img/iconsRoomInformation.svg') }}" alt="">
            <a class="navbar-icon" href="/"><p>Room Information</p></a>
        </div>

        <span class="fa-stack">
            <i class="far fa-calendar fa-stack-2x"></i>
            <strong class="fa-stack-1x calendar-text" id="date"></strong>
        </span>
        
        <div class="calendarOpt">
            <a href=""><p>Calendar</p></a>
        </div>

        <div class="navbarMenuOpt">
            <img class="navbar-icon-image" src="{{ asset('img/iconsLogin.svg') }}" alt="">
            <a class="navbar-icon" href="/login"><p>Login</p></a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // When the document is ready
    $(document).ready(function() {
        // Update date, month, and year
        $('#date').text(new Date().getDate());
    });
</script>
