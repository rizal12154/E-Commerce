<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with('itemPesanan.produk')->get();
        return view('pesanan.index', compact('pesanan'));
    }

    public function show($id)
    {
        $pesanan = Pesanan::with('itemPesanan.produk')->findOrFail($id);
        return view('pesanan.show', compact('pesanan'));
    }
}
