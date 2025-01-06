<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Shop;
use App\Http\Controllers\Contact;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\User;

// Halaman utama
Route::get('/home', [Home::class, 'index'])->name('home.index');

// Halaman toko
Route::get('/shop', [Shop::class, 'index'])->name('shop.index');

// Halaman kategori
Route::resource('kategori', KategoriController::class)->except(['show']);

// Halaman produk
Route::resource('produk', ProdukController::class)->except(['show']);

// Halaman keranjang
Route::resource('keranjang', KeranjangController::class)->only(['index', 'store', 'destroy']);

// Halaman pesanan
Route::resource('pesanan', PesananController::class)->only(['index', 'show', 'store']);

// Halaman pembayaran
Route::resource('pembayaran', PembayaranController::class)->only(['index', 'create', 'store']);

// Halaman pengguna
Route::get('/user', [User::class, 'index'])->name('user.index');

// Halaman kontak
Route::get('/contact', [Contact::class, 'index'])->name('contact.index');
