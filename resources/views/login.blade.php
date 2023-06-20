<?php
session_start();
$message = '';

// Cek apakah pengguna telah mengirimkan data login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi login di sini (misalnya dengan memeriksa database)
    // Gantilah kode berikut dengan validasi sesuai dengan struktur tabel dan basis data Anda
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'donasihtml');
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil, simpan informasi pengguna ke dalam sesi
        $_SESSION['username'] = $username;
        // Redirect ke halaman home
        header('Location: /home');
        exit;
    } else {
        // Login gagal, tampilkan pesan kesalahan
        $message = 'Username atau password salah';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<style>
.container {
  margin: 0 auto;
  width: 400px;
  height: 400px;
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
.register-link {
  display: block;
  margin-top: 20px;
  font-size: 14px;
}
.register-link a {
  color: #26A8B9;
  text-decoration: none;
}
	</style>
	<title>Halaman Login Donasi</title>
</head>
<body>
	<div class="container">
		<img src="{{ asset('images/logo.png') }}" alt="Logo Donasi" class="logo">
		<form method="post" action="{{route('login.valid')}}">
      @csrf
      <input type="text" name="username" placeholder="Username" class="input-field">
			<input type="password" name="password" placeholder="Password" class="input-field">
			<button type="submit" class="btn">Masuk</button>
		</form>
		<div class="register-link">
			<p>Tidak punya akun? <a href="/register">Registrasi di sini</a></p>
		</div>
	</div>
</body>
</html>