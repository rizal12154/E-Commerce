<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produk extends Controller
{
    public function index () {
        return view('home.produk');
    }
}
