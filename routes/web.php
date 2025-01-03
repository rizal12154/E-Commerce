<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Keranjang;
use App\Http\Controllers\Order;
use App\Http\Controllers\Pembayaran;
use App\Http\Controllers\User;


Route::get('/home', [Home::class, 'index']);

Route::get('/kategori', [Kategori::class, 'index']);

Route::get('/produk', [Produk::class, 'index']);

Route::get('/keranjang', [Keranjang::class, 'index']);

Route::get('/order', [Order::class, 'index']);

Route::get('/pembayaran', [Pembayaran::class, 'index']);

Route::get('/user', [User::class, 'index']);

Route::get('/contact', [Contact::class, 'index']);
