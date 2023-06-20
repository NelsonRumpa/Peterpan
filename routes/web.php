<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\tambahdonasiController;
use App\Http\Controllers\AddDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GetdataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DonationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/login/valid', [LoginController::class, 'login'])->name('login.valid');

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('admin/login/valid', [LoginAdminController::class, 'loginadmin'])->name('loginadmin.valid');

Route::post('/register/valid', [LoginController::class, 'register'])->name('register.valid');

Route::get('/profil', [ProfileController::class, 'show'])->name('profil.show');

Route::get('/home', [GetdataController::class, 'index'])->name('home');

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/feedback', [FeedbackController::class, 'show'])->name('feedback.show');

// Route::post('/register', function (Illuminate\Http\Request $request) {
//     // validasi input
//     $validatedData = $request->validate([
//         'email' => 'required|email|max:255|unique:users',
//         'nama' => 'required|max:255',
//         'username' => 'required|max:255',
//         'no_telepon' => 'required|max:12',
//         'password' => 'required|min:8',
//     ]);
//      // buat user baru
//     $user = new App\Models\User;
//     $user->email = $validatedData['email'];
//     $user->nama = $validatedData['nama'];
//     $user->username = $validatedData['username'];
//     $user->no_telepon = $validatedData['no_telepon'];
//     $user->password = md5($validatedData['password']);
//     $user->save();
//      // kirim email konfirmasi atau aktivasi akun
//      return redirect('/home')->with('success', 'Selamat! Akun Anda berhasil dibuat. Silahkan login untuk melanjutkan.');
// });

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});;

Route::get('/admin/tambahdonasi', function () {
    return view('admin.tambahdonasi');
});;

Route::post('/admin/donasi', [tambahdonasiController::class, 'store'])->name('store');

Route::get('/admin/addData', [AddDataController::class, 'index'])->name('admin.addData');

Route::get('/donate/{id}', [DonationController::class, 'donatenew'])->name('donate');

Route::post('/dona', [DonationController::class, 'donate'])->name('dona');

// Route::get('/admin/addData', function () {
//     return view('admin.addData');
// });;
