<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;

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

// folder app/http\controller
// Route::get('/mahasiswa', [App\Http\Controllers\PageController::class, 'tampil']);

// membuat controller secara manual
// Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
// Route::get('/mahasiswa', [App\Http\Controllers\PageController::class, 'tampil']);

// cara penulisan route untuk controller
// 1
// Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
// Route::get('/mahasiswa', [App\Http\Controllers\PageController::class, 'tampil']);


// use App\Http\Controllers\PageController;
// Route::get('/', [PageController::class, 'index']);
// Route::get('/mahasiswa', [PageController::class, 'tampil']);

// memindahkan file controller
// use App\Http\Controllers\Admin\PageController;
// Route::get('/', [PageController::class, 'index']);
// Route::get('/mahasiswa', [PageController::class, 'tampil']);

// mengakses laravel facade
// use App\Http\Controllers\Admin\PageController;
// Route::get('/coba-facade', [PageController::class, 'cobaFacade']);

// mengakses external class
// use App\Http\Controllers\Admin\PageController;
// Route::get('coba-class', [PageController::class, 'cobaClass']);