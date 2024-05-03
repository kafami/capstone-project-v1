<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboardkonfirmasi.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="nav">
    @include('partials.dashboardnavbar')
    </div>
        <div class="dash-main">
            <div class="konfirmasi-ruangan">
                <div>
                    <p class="ruangan">ruangan A202</p>
                    <p class="peminjam">Kaffa Emirudin</p>
                    <div class="date-time">
                        <p class="date">1/10/24</p>
                        <p class="time">16:30 - 18:00</p>
                    </div>
                </div>
                <div>
                    <input type="checkbox">
                    <input type="checkbox">
                </div>
            </div>

            <div class="konfirmasi-ruangan">
                <div>
                    <p class="ruangan">ruangan A201</p>
                    <p class="peminjam">Kevin Ryo Pratama</p>
                    <div class="date-time">
                        <p class="date">1/13/24</p>
                        <p class="time">16:30 - 18:00</p>
                    </div>
                </div>
                <div>
                    <input type="checkbox">
                    <input type="checkbox">
                </div>
            </div>
        </div>

</body>
</html>
