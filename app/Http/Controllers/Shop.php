<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class Shop extends Controller
{
    public function index () {
        return view('home.shop');
    }
}
