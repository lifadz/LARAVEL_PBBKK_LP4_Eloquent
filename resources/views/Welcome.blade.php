<!-- Button to open the modal login form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('cssfile/Welcome.css') }}">
    {{-- Ini adalah halaman Welcome yang ditampilkan dari routing web --}}
    <title>Welcome</title> 
</head>
<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h3>SariRasa</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="">Beranda</a></li>
                    <li><a href="">Produk</a></li>
                    <li><a href="">Tentang</a></li>
                    <li><a href="">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-2-word">
            <h1>Pusatnya Oleh - Oleh <br> Khas Bengkulu</h1>
            <p>Nikmati Keindahan Budaya Bengkulu dalam Setiap Produk Kami.</p>
            <a href="" class="btn">Jelajahi Produk Kami &#8594; </a>
        </div>
        <div class="col-2">
            <img src="{{ asset('images/people.png')}}" alt="pelanggan">
        </div>
    </div>
</div>
</body>
</html>
