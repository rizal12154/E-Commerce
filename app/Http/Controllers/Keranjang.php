<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class Keranjang extends Controller
{
    public function index () {
        return view('home.cart');
    }
}
