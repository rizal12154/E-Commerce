<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori')->paginate(10);
        $no = 1;
        return view('admin.produk_admin.index', compact('produk', 'no'));
    }

    public function create()
    {
        $data['kategori'] = Kategori::all();
        return view('admin.produk_admin.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori,kategori_id',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['kategori_id', 'nama', 'deskripsi', 'harga', 'stok']);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->storeAs('produk', $namaFile, 'public');
            $data['gambar'] = $path;
        }

        Produk::create($data);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan.');
    }


    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    public function edit($id)
    {
        try {
            $produk = Produk::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return redirect('/produk')->with('error', 'Produk tidak ditemukan.');
        }
        return view('admin.produk_admin.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori,id',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = Produk::findOrFail($id);
        $data = $request->only(['kategori_id', 'nama', 'deskripsi', 'harga', 'stok']);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->storeAs('produk', $namaFile, 'public');
            $data['gambar'] = $path;
        }

        $produk->update($data);
        return redirect('/produk')->with('success', 'Produk berhasil diperbarui.');
    }

    public function hapus($id)
    {
        Produk::where('produk_id', $id)->delete();
        return redirect('/produk')->with(['success' => 'Produk berhasil dihapus.']);
    }

    public function totalHargaProduk()
    {
        $totalHarga = Produk::sum('harga'); // Menjumlahkan semua harga produk
        return view('total-harga', compact('totalHarga'));
    }
}
