<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DosenController;

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

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Luhut Panjaitan", "Jokowi", "Vladimir Putin", "Lisa Pertama"];
//     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('/dosen', function(){
//     $arrDosen = ["Maya Fitriani, M.M.", "Prof. Silvia Nst, M.Farm.",
//     "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
//     return view('dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery', function(){
//     return view('gallery');
// });

// Route::get('admin', function () {
//     return view('admin');
// });


Route::get('/', [App\Http\Controllers\admin\PageController::class,'index']);
Route::get('/mahasiswa', [App\Http\Controllers\admin\PageController::class,'tampil']);
