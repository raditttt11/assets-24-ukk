<?php

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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

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

route::get('/buku', function() {
    return view('dashboard.buku');
});

route::get('/minjam', function() {
    return view('dashboard.minjam');
});

route::get('/profil', function() {
    return view('dashboard.profil');
});
