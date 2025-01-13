<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
{
    $pesananId = session()->get('pesananId', null); // Ambil ID pesanan dari session
    $keranjang = session()->get('keranjang', []);
    $totalHarga = array_reduce($keranjang, function ($carry, $item) {
        return $carry + ($item['harga'] * $item['jumlah']);
    }, 0);

    $metodePembayaran = [
        ['id' => 'bank', 'nama' => 'Direct bank transfer'],
        ['id' => 'delivery', 'nama' => 'Cash on delivery'],
        ['id' => 'ovo', 'nama' => 'OVO'],
        ['id' => 'gopay', 'nama' => 'GoPay'],
    ];

    $provinces = [
        ['id' => 'AC', 'nama' => 'Aceh'],
        ['id' => 'SU', 'nama' => 'Sumatera Utara'],
        ['id' => 'SB', 'nama' => 'Sumatera Barat'],
        ['id' => 'RI', 'nama' => 'Riau'],
        ['id' => 'KR', 'nama' => 'Kepulauan Riau'],
        ['id' => 'JA', 'nama' => 'Jambi'],
        ['id' => 'SS', 'nama' => 'Sumatera Selatan'],
        ['id' => 'BB', 'nama' => 'Bangka Belitung'],
        ['id' => 'BE', 'nama' => 'Bengkulu'],
        ['id' => 'LA', 'nama' => 'Lampung'],
        ['id' => 'JK', 'nama' => 'DKI Jakarta'],
        ['id' => 'JB', 'nama' => 'Jawa Barat'],
        ['id' => 'JT', 'nama' => 'Jawa Tengah'],
        ['id' => 'DY', 'nama' => 'DI Yogyakarta'],
        ['id' => 'JI', 'nama' => 'Jawa Timur'],
        ['id' => 'BT', 'nama' => 'Banten'],
        ['id' => 'BA', 'nama' => 'Bali'],
        ['id' => 'NB', 'nama' => 'Nusa Tenggara Barat'],
        ['id' => 'NT', 'nama' => 'Nusa Tenggara Timur'],
        ['id' => 'KB', 'nama' => 'Kalimantan Barat'],
        ['id' => 'KT', 'nama' => 'Kalimantan Tengah'],
        ['id' => 'KI', 'nama' => 'Kalimantan Timur'],
        ['id' => 'KS', 'nama' => 'Kalimantan Selatan'],
        ['id' => 'KU', 'nama' => 'Kalimantan Utara'],
        ['id' => 'SA', 'nama' => 'Sulawesi Utara'],
        ['id' => 'ST', 'nama' => 'Sulawesi Tengah'],
        ['id' => 'SG', 'nama' => 'Sulawesi Tenggara'],
        ['id' => 'SR', 'nama' => 'Sulawesi Barat'],
        ['id' => 'SN', 'nama' => 'Sulawesi Selatan'],
        ['id' => 'GO', 'nama' => 'Gorontalo'],
        ['id' => 'MA', 'nama' => 'Maluku'],
        ['id' => 'MU', 'nama' => 'Maluku Utara'],
        ['id' => 'PA', 'nama' => 'Papua'],
        ['id' => 'PB', 'nama' => 'Papua Barat'],
        ['id' => 'PT', 'nama' => 'Papua Tengah'],
        ['id' => 'PS', 'nama' => 'Papua Selatan'],
        ['id' => 'PU', 'nama' => 'Papua Pegunungan'],
    ];

    return view('pesanan.index', compact('keranjang', 'totalHarga', 'metodePembayaran', 'pesananId', 'provinces'));
}


    public function show($id)
    {
        $pesanan = session()->get('pesanan');

        if (!isset($pesanan[$id])) {
            return redirect()->route('pesanan.index')->with('error', 'Pesanan tidak ditemukan!');
        }

        return view('pesanan.show', [
            'pesanan' => $pesanan[$id],
        ]);
    }


    public function simpanSementara(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'province' => 'required|string|max:50',
        ]);

        session(['billing_information' => $validated]);

        return redirect()->route('pesanan.index')->with('success', 'Informasi billing berhasil disimpan!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'total_harga' => 'required|numeric|min:0',
            'items' => 'required|array',
            'items.*.produk_id' => 'required|integer|exists:produk,id',
            'items.*.nama' => 'required|string|max:255',
            'items.*.harga' => 'required|numeric|min:0',
            'items.*.jumlah' => 'required|integer|min:1',
        ]);

        $billingInformation = session()->get('billing_information');

        if (!$billingInformation) {
            return redirect()->back()->with('error', 'Informasi billing tidak ditemukan!');
        }

        $pesanan = session()->get('pesanan', []);
        $pesananId = uniqid('order_');

        $pesanan[$pesananId] = [
            'id' => $pesananId,
            'tanggal_pesanan' => now()->toDateTimeString(),
            'status' => 'tertunda',
            'total_harga' => $request->total_harga,
            'items' => $request->items,
            'billing' => $billingInformation,
        ];

        session(['pesanan' => $pesanan]);

        return redirect()->route('pesanan.show', $pesananId)
            ->with('success', 'Pesanan berhasil dibuat!');
    }

}
