<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WhitelistController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('layouts/dashboard');
// });

Route::get('/home', [HomeController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/keranjang', [KeranjangController::class, 'index']);

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/whitelist', [WhitelistController::class, 'index']);

Route::get('/eror', [ErrorController::class, 'index']);

Route::get('/detail', [DetailController::class, 'index']);
