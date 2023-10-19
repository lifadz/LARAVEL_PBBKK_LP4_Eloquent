{{-- Jadi pada Login blade ini, terdapat code html untuk tampilan login yang nantinya akan diroute didalam web.php pada folder routes agar bisa di tampilkan pada browser --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	{{-- Untuk mengimport file Login.css yang berada di dalam direktori public dan terdapat di dalam folder cssfile --}}
    <link rel="stylesheet" href="{{ asset('cssfile/Login.css') }}"> 

    {{-- Ini adalah halaman Login yang ditampilkan dari routing web --}}
    <title>Welcome</title>
</head>
<body>

	<header>
		<h2 class="logo">Sari <span>Rasa</span></h2>
		<nav class="navigation">
			<a href="#">Beranda</a>
			<a href="#">Produk</a>
			<a href="#">Tentang Kami</a>
			<a href="#">Kontak</a>
		</nav>
	</header>
 
	
</body>
</html>
