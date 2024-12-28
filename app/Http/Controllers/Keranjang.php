<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Keranjang extends Controller
{
    public function index () {
        return view('home.cart');
    }
}
