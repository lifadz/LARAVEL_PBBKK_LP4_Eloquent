{{-- Jadi pada Register blade ini, terdapat code html untuk tampilan login yang nantinya akan diroute didalam web.php pada folder routes agar bisa di tampilkan pada browser --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	{{-- Untuk mengimport file Register.css yang berada di dalam direktori public dan terdapat di dalam folder cssfile --}}
    <link rel="stylesheet" href="{{ asset('cssfile/Register.css') }}">

    {{-- Ini adalah halaman Register yang ditampilkan dari routing web --}}
    <title>Welcome</title>
</head>
<body>
    <h1>Selamat Datang Toko Cendera Mata</h1>
 
	<div class="kotak_register">
		<p class="tulisan_register">Masukkan Data Anda</p>
		
		<form>
            
            @csrf

            <label>Email</label>
			<input type="email" name="email" class="form_register" placeholder="masukkan  email kamu .." required>

			<label>Username</label>
			<input type="text" name="username" class="form_register" placeholder="masukkan username kamu .." required>
 
			<label>Password</label>
			<input type="password" name="password" class="form_register" placeholder=" masukkan Password .." required>
 
			<input type="submit" class="tombol_register" value="REGISTER">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="/Welcome">Kembali</a>
			</center>
		</form>
		
	</div>
</body>
</html>
