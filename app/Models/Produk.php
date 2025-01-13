<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'produk_id';
    protected $fillable = ['kategori_id', 'nama', 'deskripsi', 'harga', 'stok', 'gambar'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }

    public function item_pesanan()
    {
        return $this->hasMany(ItemPesanan::class, 'produk_id');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'produk_id');
    }
}
