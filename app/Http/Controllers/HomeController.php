<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function shop()
    {
        $produk = Produk::all();
        $gambar = $produk->first()?->gambar;

        return view('home.shop', compact('produk', 'gambar'));
    }
}
