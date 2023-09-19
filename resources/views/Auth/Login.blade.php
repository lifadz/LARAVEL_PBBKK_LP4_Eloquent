<!-- Button to open the modal login form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('cssfile/Login.css') }}">
    {{-- Ini adalah halaman Login yang ditampilkan dari routing web --}}
    <title>Welcome</title>
</head>
<body>
    <h1>Selamat Datang Toko Cendera Mata</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
        
		<form>
            
            @csrf

			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="/Welcome">Kembali</a>
			</center>
		</form>
		
	</div>
</body>
</html>
