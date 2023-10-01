{{-- Jadi pada Welcome blade ini, terdapat code html untuk tampilan login yang nantinya akan diroute didalam web.php pada folder routes agar bisa di tampilkan pada browser --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Untuk mengimport file Welcome.css yang berada di dalam direktori public dan terdapat di dalam folder cssfile --}}
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
            {{-- Mengimport image yang berada di dalam direktori public dan berada di dalam folder image --}}
            <img src="{{ asset('images/people.png')}}" alt="pelanggan">
        </div>
    </div>
</div>
</body>
</html>
