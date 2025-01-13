<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = session()->get('keranjang', []); // Contoh: mengambil data dari sesi

        $subtotal = array_reduce($keranjang, function ($carry, $item) {
            if (isset($item['harga'], $item['jumlah'])) {
                $carry += $item['harga'] * $item['jumlah'];
            }
            return $carry;
        }, 0);

        return view('keranjang.index', compact('keranjang', 'subtotal'));
    }


    public function tambah(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,produk_id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $keranjang = session()->get('keranjang', []);

        $produk_id = $request->produk_id;

        if (isset($keranjang[$produk_id])) {
            $keranjang[$produk_id]['jumlah'] += $request->jumlah;
        } else {
            $produk = Produk::find($produk_id);

            if (!$produk) {
                return redirect()->back()->withErrors('Produk tidak ditemukan.');
            }

            $keranjang[$produk_id] = [
                'produk_id' => $produk->produk_id,
                'gambar' => $produk->gambar,
                'nama' => $produk->nama,
                'harga' => $produk->harga,
                'jumlah' => $request->jumlah,
            ];
        }

        // Simpan ke sesi
        session(['keranjang' => $keranjang]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }



    public function showCart()
    {
        $keranjang = Keranjang::with('produk')->get();
        return view('keranjang.index', compact('keranjang'));
    }
}
