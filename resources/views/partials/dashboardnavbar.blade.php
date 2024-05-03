<link rel="stylesheet" href="{{ asset('css/dashboardnavbar.css') }}">
<div class="dash-container">
    <div class="dash-nav">
        <img class="dashNavicons" src="{{ asset('img/dashboard.svg') }}" alt="">
        <p class="navText">Dashboard</p>
        <div class="dashboard-option">
            <img class="dashNavicons" src="{{ asset('img/home.svg') }}" alt=""><p class="navText">Home</p>
        </div>
        <div class="dashboard-option">
            <img class="dashNavicons" src="{{ asset('img/calendar.svg') }}" alt=""><p class="navText">Konfirmasi Request</p>
        </div>
        <div class="dashboard-option">
            <img class="dashNavicons" src="{{ asset('img/logout.svg') }}" alt=""><a href="/"><p class="navText">Logout</p></a>
        </div>
    </div>
</div>