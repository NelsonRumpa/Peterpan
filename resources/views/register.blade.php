<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
	margin: 0 auto;
	width: 400px;
	height: 520px;
	border: 1px solid #ddd;
	padding: 20px;
	text-align: center;
	border-radius: 5px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	box-shadow: 0 0 10px rgba(0,0,0,0.1);
	background-color: #fff;
	display: flex;
	flex-direction: column;
	justify-content: center;
}
.logo {
    margin-bottom: 20px;
    max-width: 30%;
    height: auto;
    margin-left: 35%;
}
 .input-field {
	margin-bottom: 20px;
	text-align: left;
	display: block;
	width: 95%;
	padding: 10px;
	border: 1px solid #ddd;
	border-radius: 5px;
	background: #f5f5f5;
	font-size: 16px;
	color: #666;
}
 .input-field:focus {
	outline: none;
	border-color: #26A8B9;
}
 .btn {
	padding: 10px 20px;
	background-color: #26A8B9;
	color: white;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	font-size: 16px;
    font-weight: bold;
	transition: all 0.2s ease-in-out;
}
 .btn:hover {
	background-color: #2499A8;
}
 .login-link {
	display: block;
	margin-top: 20px;
	font-size: 14px;
}
 .login-link a {
	color: #26A8B9;
	text-decoration: none;
}
    </style>
	<title>Halaman Registrasi Donasi</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="container">
		<img src="{{ asset('images/logo.png') }}" alt="Logo Donasi" class="logo">
        <form method="POST" action="{{route('register.valid')}}">
			@csrf
            <input type="email" name="email" placeholder="Email" class="input-field">
			<input type="text" name="nama" placeholder="Nama Lengkap" class="input-field">
            <input type="text" name="username" placeholder="Username" class="input-field">
            <input type="text" name="no_telepon" placeholder="No Telepon" class="input-field">
			<input type="password" name="password" placeholder="Password" class="input-field">
			<button type="submit" class="btn">Registrasi</button>
		</form>
		<div class="login-link">
			<p>Sudah punya akun? <a href="/login">Masuk di sini</a></p>
		</div>
	</div>
</body>
</html>