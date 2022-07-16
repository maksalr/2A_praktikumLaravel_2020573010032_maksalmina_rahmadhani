<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/profile', [profileController::class, 'profile'])->name('profile');
Route::get('/product', [productController::class, 'product'])->name('product');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');