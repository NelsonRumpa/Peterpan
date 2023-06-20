<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request);
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = $request->only('username', 'password');

        if (Auth::attempt($data))
        {
            return redirect()->route('home');
        }
        return redirect()->back();

    }
    public function register(){
// $email = $request->email;
// $nama = $request->nama;
// $username = $request->username;
// $no_telepon = $request->no_telepon;
// $password = $request->password;

$email = $_POST['email'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$no_telepon = $_POST['no_telepon'];
$password = Hash::make($_POST['password']);

$query = DB::table('users')->insert([
    'email' => $email,
    'nama' => $nama,
    'username' => $username,
    'no_telepon' => $no_telepon,
    'password' => $password,
]);

if ($query) {
    echo "<script>alert('Registrasi berhasil!');</script>";
    return redirect('/login');
} else {
    echo "<script>alert('Registrasi gagal. Silahkan coba lagi.');</script>";
}
    }
}