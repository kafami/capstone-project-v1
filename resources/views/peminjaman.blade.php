<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/peminjaman.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="navbar-holder">
        @include('partials.navbar')
    </div>
    <div class="main">
        <div>
            <form action="/konfirmasi.php">
              <label for="cars">Pilih ruangan:</label>
              <select name="cars" id="cars">
                <option value="A201">A201</option>
                <option value="A202">A202</option>
                <option value="A102">A102</option>
                <option value="A101">A101</option>
              </select>
              <br><br>
            </form>
            
        </div>
        <div>
            <form action="/action_page.php">
                <label for="bookingdate">Pilih tanggal dan waktu: </label>
                <input type="datetime-local" id="bookingdate" name="bookingdate">
              </form>
        </div>
        <div>
            <p>Acara</p>
            <input class="nama-acara" type="text">
        </div>
        <div>
            <p>Deskripsi</p>
            <input class="deskripsi-acara" type="text">
        </div>
        <input type="submit">
        <div>
            @include('partials.tables')
        </div>
    </div>
</body>
</html>