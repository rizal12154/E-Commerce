<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanan,id',
            'metode_pembayaran' => 'required|string',
            'status' => 'required|string',
        ]);

        Pembayaran::create($request->all());
        return redirect()->route('pembayaran.index');
    }
}
