<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/home', [Home::class, 'index']);
