<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

route::get('/register', function () {
    return view('auth.register');
});

route::get('/koleksi', function() {
    return view('dashboard.koleksi');
});

route::get('/kategori', function() {
    return view('dashboard.kategori');
});

route::get('/buku', function () {
    return view('dashboard.buku');
});

route::get('/minjam', function() {
    return view('dashboard.minjam');
});

route::get('/profil', function() {
    return view('dashboard.profil');
});

route::get('/create', function () {
    return view('admin.create');
});


// login
route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');

// create Buku
route::get('/create', [App\Http\Controllers\BukuController::class, 'create'])->name('create');