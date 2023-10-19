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
    <nav class="nav">
        <a href="#" class="nav-logo">X-SHOP</a>

        <ul class="nav-items">
            <li class="nav-item">
                <a href="#" class="nav-link">Beranda</a>
                <a href="#" class="nav-link">Produk</a>
                <a href="#" class="nav-link">Tentang</a>
                <a href="#" class="nav-link">Kontak</a>
            </li>
        </ul>

        <button class="button-login">Login</button>
    </nav>
    <div class="row">
        <div class="col-2-word">
            <h1>Menyediakan Semua <br>Kebutuhanmu</h1>
            <p>Apapun Kebutuhanmu,Semuanya Ada Disini.</p>
            <a href="" class="btn">Jelajahi Produk Kami &#8594; </a>
        </div>
        <div class="col-2">
            {{-- Mengimport image yang berada di dalam direktori public dan berada di dalam folder image --}}
            <img src="{{ asset('images/girl-pointing.png')}}" alt="pelanggan">
        </div>
    </div>
</div>
</body>
</html>
