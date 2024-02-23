<?php

use App\Http\Controllers\KategoriController;
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

Route::get('/', function () {
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
route::get('/index', [App\Http\Controllers\BukuController::class, 'index'])->name('index');
route::get('/create', [App\Http\Controllers\BukuController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\BukuController::class, 'store'])->name('store');
route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku');
route::get('/edit/{id}', [App\Http\Controllers\BukuController::class, 'edit'])->name('edit');
route::post('/update/{id}', [App\Http\Controllers\BukuController::class, 'update'])->name('update');
route::get('/destroy/{id}', [App\Http\Controllers\BukuController::class, 'destroy'])->name('destroy');

// Register
route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');
route::post('/postregister', [App\Http\Controllers\LoginController::class, 'postregister'])->name('postregister');

// Kategori
route::get('/index', [App\Http\Controllers\KategoriController::class, 'index'])->name('index');
route::get('/create-kategori', [App\Http\Controllers\KategoriController::class, 'create'])->name('create-kategori');
Route::post('/store-kategori', [App\Http\Controllers\KategoriController::class, 'store'])->name('store-kategori');
route::get('/data', [App\Http\Controllers\KategoriController::class, 'index'])->name('data');
route::get('/edit-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'edit'])->name('edit-kategori');
route::post('/update-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name('update-kategori');
route::get('/destroy-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('destroy-kategori');

// Minjam
Route::get('/minjam', [App\Http\Controllers\MinjamController::class, 'index'])->name('index');


Route::middleware(['middleware', 'admin'])->group(function () {
    Route::get('admin', function () {
        return 'admin page';
    });
});