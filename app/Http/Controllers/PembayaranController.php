<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pesananId = session()->get('pesananId', null);
        $metodePembayaran = [
            ['id' => 'kartu_kredit', 'nama' => 'Kartu Kredit', 'icon' => 'master.png'],
            ['id' => 'paypal', 'nama' => 'PayPal', 'icon' => 'paypal.png'],
            ['id' => 'transfer_bank', 'nama' => 'Transfer Bank', 'icon' => 'bank-transfer.png'],
            ['id' => 'cod', 'nama' => 'Cash on Delivery', 'icon' => 'cod.png'],
        ];

        return view('pembayaran.index', compact('metodePembayaran', 'pesananId'));
    }

    public function storePembayaran(Request $request)
    {

        $request->validate([
            'metode_pembayaran' => 'required|in:kartu_kredit,paypal,transfer_bank,cod',
            'jumlah' => 'required|numeric|min:0',
        ]);

        $pesanan = session('pesanan', []);

        $pesanan['pembayaran'] = [
            'metode_pembayaran' => $request->metode_pembayaran,
            'status' => 'tertunda',
            'jumlah' => $request->jumlah,
        ];

        session()->put('pesanan', $pesanan);

        $pesananId = session('pesananId');
        if (!$pesananId) {
            return redirect()->route('pesanan.index')
                ->with('error', 'Pesanan tidak ditemukan.');
        }

        return redirect()->route('pesanan.show', ['id' => $pesananId])
            ->with('success', 'Metode pembayaran berhasil disimpan!');
    }
}
