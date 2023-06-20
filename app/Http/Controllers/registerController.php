<?php

use Illuminate\Support\Facades\DB;
 //tangkap data dari form
$email = $_POST['email'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$no_telepon = $_POST['no_telepon'];
$password = md5($_POST['password']);
 //query untuk memasukkan data ke tabel users
$query = DB::table('user')->insert([
    'email' => $email,
    'nama' => $nama,
    'username' => $username,
    'no_telepon' => $no_telepon,
    'password' => $password,
]);
 //check jika data berhasil disimpan atau tidak
if ($query) {
    echo "<script>alert('Registrasi berhasil!');</script>";
    return redirect('/home');
} else {
    echo "<script>alert('Registrasi gagal. Silahkan coba lagi.');</script>";
}
?>