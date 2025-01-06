<?php

namespace App\Http\Controllers;

use app\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('pesanan.index', compact('pesanan'));
    }

    public function show($id)
    {
        $pesanan = Pesanan::findorFail($id);
        return view('pesanan.show', compact('pesanan'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'payment' => 'required',
            'agree' => 'accepted',
        ]);

        $pesanan = new Pesanan();
        $pesanan->user_id = auth()->id();
        $pesanan->metode_pembayaran = 'Menunggu Pembayaran';
        $pesanan->save();

        return redirect()->route('pesanan.show', $pesanan->id)->with('success', 'Pesanan Anda Berhasil Dibuat');
    }
}
