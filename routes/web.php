<?php

use App\Http\Controllers\MinjamController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\UlasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

route::get('/register', function () {
    return view('auth.register');
});

route::get('/profil', function () {
    return view('dashboard.profil');
});

route::get('/create', function () {
    return view('admin.create');
});

Route::middleware('guest')->group(function () {
    // login
    route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
    route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
    // Register
    route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');
    route::post('/postregister', [App\Http\Controllers\LoginController::class, 'postregister'])->name('postregister');
});

Route::middleware('auth')->group(function () {
    route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::resource('buku', App\Http\Controllers\BukuController::class);
    route::get('/detail/{id}', [App\Http\Controllers\BukuController::class, 'show'])->name('detail');

    // Minjam
    Route::get('/minjam', [App\Http\Controllers\MinjamController::class, 'index'])->name('index');
    Route::get('/create-peminjam', [App\Http\Controllers\MinjamController::class, 'create'])->name('create-peminjam');
    Route::post('/store-peminjam', [App\Http\Controllers\MinjamController::class, 'store'])->name('store-peminjam');
    Route::get('/minjam', [App\Http\Controllers\MinjamController::class, 'index'])->name('minjam');

    // Ulasan
    Route::resource('/ulas', App\Http\Controllers\UlasController::class);

    // Koleksi
    Route::resource('/koleksi', App\Http\Controllers\KoleksiController::class);

    // Route::middleware('userAcces:peminjam')->group(function () {
    //     route::get('/index', [App\Http\Controllers\BukuController::class, 'index'])->name('index');
    //     route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku');
    //     route::get('/detail/{id}', [App\Http\Controllers\BukuController::class, 'show'])->name('detail');
    // });
    Route::middleware('userAcces:admin,petugas')->group(function () {
        Route::resource('/user', App\Http\Controllers\UserController::class);
        route::get('/edit/{id}', [App\Http\Controllers\BukuController::class, 'edit'])->name('edit');
        route::post('/update/{id}', [App\Http\Controllers\BukuController::class, 'update'])->name('update');
        Route::get('/create', [App\Http\Controllers\BukuController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\BukuController::class, 'store'])->name('store');
        route::get('/destroy/{id}', [App\Http\Controllers\BukuController::class, 'destroy'])->name('destroy');
        //kategori
        route::get('/index', [App\Http\Controllers\KategoriController::class, 'index'])->name('index');
        route::get('/create-kategori', [App\Http\Controllers\KategoriController::class, 'create'])->name('create-kategori');
        Route::post('/store-kategori', [App\Http\Controllers\KategoriController::class, 'store'])->name('store-kategori');
        route::get('/data', [App\Http\Controllers\KategoriController::class, 'index'])->name('data');
        route::get('/edit-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'edit'])->name('edit-kategori');
        route::post('/update-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name('update-kategori');
        route::get('/destroy-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('destroy-kategori');
        //minjam
        Route::get('/edit-minjam/{id}', [App\Http\Controllers\MinjamController::class, 'edit'])->name('edit-peminjam');
        Route::post('/update-minjam/{id}', [App\Http\Controllers\MinjamController::class, 'update'])->name('update-minjam');
        Route::get('/destroy-peminjam/{id}', [App\Http\Controllers\MinjamController::class, 'destroy'])->name('destroy-peminjam');
        Route::get('minjam/export', [App\Http\Controllers\MinjamController::class, 'export'])->name('minjam/export');
        Route::get('admin', function () {
            return 'admin page';
        });
    });
});
