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

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home.index');
    Route::get('/shop', 'shop')->name('shop.index');
});


Route::controller(KategoriController::class)->group(function () {
    Route::get('/kategori', 'index')->name('kategori.index');
    Route::get('/kategori/create', 'create')->name('kategori.create');
    Route::post('/kategori', 'store')->name('kategori.store');
    Route::put('/kategori/{id}', 'update')->name('kategori.update');
    Route::delete('/kategori/{id}', 'destroy')->name('kategori.destroy');
});


Route::controller(ProdukController::class)->group(function () {
    Route::get('/produk_admin', 'index')->name('produk.index');
    Route::get('/produk_admin/create', 'create')->name('produk.create');
    Route::post('/produk', 'store')->name('produk.store');
    Route::put('/produk/{id}', 'update')->name('produk.update');
    Route::delete('/produk/{id}', 'destroy')->name('produk.destroy');
});


Route::controller(KeranjangController::class)->group(function () {
    Route::get('/keranjang', 'index')->name('keranjang.index');
    Route::post('/keranjang', 'store')->name('keranjang.store');
    Route::delete('/keranjang/{id}', 'destroy')->name('keranjang.destroy');
});


Route::controller(PesananController::class)->group(function () {
    Route::get('/pesanan', 'index')->name('pesanan.index');
    Route::get('/pesanan/{id}', 'show')->name('pesanan.show');
    Route::post('/pesanan', 'store')->name('pesanan.store');
});


Route::controller(PembayaranController::class)->group(function () {
    Route::get('/pembayaran', 'index')->name('pembayaran.index');
    Route::get('/pembayaran/create', 'create')->name('pembayaran.create');
    Route::post('/pembayaran', 'store')->name('pembayaran.store');
});


Route::controller(User::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
});
