<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\User;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}/delete', [ProdukController::class, 'hapus'])->name('produk.hapus');
Route::get('/total-harga-produk', [ProdukController::class, 'totalHargaProduk']);

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::post('/keranjang/tambah', [KeranjangController::class, 'tambah'])->name('keranjang.store');



Route::controller(User::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
});
