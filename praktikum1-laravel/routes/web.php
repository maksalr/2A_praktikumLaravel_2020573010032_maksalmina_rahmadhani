<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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

// route bawaan laravel
Route::get('/', function () {
    return view('welcome');
});


// membuat view
// Route::get('/home', function () {
//     return view('halaman_home');
// });


// Route::get('/mahasiswa', function () {
//     return View::make('mahasiswa');
// });

// membuat struktur folder view
// Route::get('/mahasiswa/', function () {
//     return view('kampus.mahasiswa');
// });

// // atau bisa juga dituliskan seperti di bawah ini
// Route::get('/mahasiswa/', function () {
//     return view('kampus/mahasiswa');
// });

//mengirim data ke view sebagai argumen
// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa', [
//         "mahasiswa01" => "Maulana Sultansyah",
//         "mahasiswa02" => "Deliana Putri",
//         "mahasiswa03" => "Ulfi Rizkia"
//     ]);
// });

// // atau bisa juga seperti ini
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = [
//         "mahasiswa01" => "Maulana Sultansyah",
//         "mahasiswa02" => "Deliana Putri",
//         "mahasiswa03" => "Ulfi Rizkia"
//     ];
//     return view('kampus.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ['Syadwina Sahara', 'Deliana Putri'];
//     return view('kampus.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
// });

// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa')->with('mahasiswa01', 'Risa Lestari');
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ['Syadzwina Sahara', "Deliana Putri"];
//     return view('kampus.mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa')
//         ->with('mahasiswa01', 'Syadzwina Sahara')
//         ->with('mahasiswa02', 'Deliana Putri');
// });

// Route::get('/mahasiswa', function () {
//     $mahasiswa01 = "Ulfi Rizkia";
//     $mahasiswa02 = "Deliana Putri";
//     return view('kampus.mahasiswa', compact('mahasiswa01', 'mahasiswa02'));
// });

// atau bisa juga menggunakan method with seperti ini
// Route::get('/mahasiswa', function () {
//     $mahasiswa01 = "Ulfi Rizkia";
//     $mahasiswa02 = "Deliana Putri";
//     return view('kampus.mahasiswa')->with(compact('mahasiswa01', 'mahasiswa02'));
// });

// Route::get('/profile', function () {
//     return view('profile', [
//         'title' => 'profile'
//     ]);
// });

// Route::get('/home', function () {
//     return view('home', [
//         'title' => 'home'
//     ]);
// });

// Route::get('/about', function () {
//     return view('about', [
//         'title' => 'about',
//         'link' => 'ada'
//     ]);
// });

// // membuat route
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/belajar', function () {
//     echo '<h1>Hello World</h1>';
//     echo '<p>Sedang belajar Laravel</p>';
// });

// Route::get('/mahasiswa/profil/coba', function () {
//     echo '<h2 style="text-align: center"><u>Welcome Coba</u></h2>';
// });

// // route parameter
// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return "Tampilkan data mahasiswa bernama $nama";
// });

// // route parameter dengan 2 parameter
// // Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
// //     return "Cek sisa stok untuk $jenis $merek";
// // });

// // Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
// //     return "Cek sisa stok untuk $a $b";
// // });

// // Route dengan optional parameter
// Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'Smartphone', $b = 'Samsung') {
//     return "Cek sisa stok untuk $a $b";
// });

// // Route parameter dengan regular expression
// // Route::get('/user/{id}', function ($id) {
// //     return "Tampilkan user dengan id = $id";
// // });

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// })->where('id', '[0-9]+');

// // Route::get('/user/{id}', function ($id) {
// //     return "Tampilkan user dengan id = $id";
// // })->where('id', '[A-Z]{2}[0-9]+');

// // Route Redirect
// Route::get('/hubungi-kami', function () {
//     return '<h1>Hubungi Kami</h1>';
// });

// Route::redirect('/contact-us', '/hubungi-kami'); // jika user masuk ke contact-us maka laravel akan mendirect ke halaman hubungi-kami

// // route group
// Route::get('/admin/mahasiswa', function () {
//     return "<h1>Daftar Mahasiswa</h1>";
// });

// Route::get('/admin/dosen', function () {
//     return "<h1>Daftar Dosen</h1>";
// });

// Route::get('/admin/karyawan', function () {
//     return "<h1>Daftar Karyawan</h1>";
// });

// Route::prefix('/admin')->group(function () {
//     Route::get('/mahasiswa', function () {
//         return "<h1>Daftar Mahasiswa</h1>";
//     });

//     Route::get('/dosen', function () {
//         return "<h1>Daftar Dosen</h1>";
//     });

//     Route::get('/karyawan', function () {
//         return "<h1>Daftar Karyawan</h1>";
//     });
// });


// // Route fallback
// Route::fallback(function () {
//     return "Maaf, alamat tidak ditemukan";
// });

// // Route priority
// // Route::get('/buku/1', function () {
// //     return "Buku ke-1";
// // });

// // Route::get('/buku/1', function () {
// //     return "buku saya ke-1";
// // });

// // Route::get('/buku/1', function () {
// //     return "Buku kita ke-1";
// // });

// Route::get('/buku/{a}', function ($a) {
//     return "Buku ke-$a";
// });

// Route::get('/buku/{b}', function ($b) {
//     return "buku saya ke-$b";
// });

// Route::get('/buku/{c}', function ($c) {
//     return "Buku kita ke-$c";
// });

// Route::get('mahasiswa/andi', function () {
//     echo "halaman mahasiswa andi";
// });

// Route::get('/mahasiswa/andi', function () {
//     echo "halaman mahasiswa andi";
// });