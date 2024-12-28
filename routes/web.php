<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Check;
use App\Http\Controllers\Keranjang;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Shop;
use App\Http\Controllers\Contact;


Route::get('/home', [Home::class, 'index']);
Route::get('/checkout', [Check::class, 'index']);
Route::get('/cart', [Keranjang::class, 'index']);
Route::get('/produk', [Produk::class, 'index']);
Route::get('/shop', [Shop::class, 'index']);
Route::get('/contact', [Contact::class, 'index']);
