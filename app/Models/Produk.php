<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
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
