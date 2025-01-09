<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::with('produk')->get();
        return view('keranjang.index', compact('keranjang'));
    }
}
