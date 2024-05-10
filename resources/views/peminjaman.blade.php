<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/peminjaman.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>{{ $title }}</title>
</head>
<body>
    {{-- pembagian kelas grid--}}
    <div class="website-body">
        {{-- bagian header --}}
        <div class="header">
            @include('partials.navbar')
        </div>
        {{-- grid tabel --}}
        <div class="main">
            <div>
                <form action="/konfirmasi.php">
                  <label for="ruangan"><p>Pilih ruangan:</p></label>
                  <select name="ruangan" id="ruangan">
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
                    <label for="bookingdate"><p>Pilih tanggal dan waktu: </p></label>
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

            {{-- manggil table --}}
            @include('partials.tables')
        </div>
        {{-- grid search bar & calendar --}}
        <div class="secondary">
            <div class="search-bar-holder">
                <input class="search-bar" type="text">
            </div>
            {{-- manggil calendar --}}
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