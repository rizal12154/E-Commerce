<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function itemPesanan()
    {
        return $this->hasMany(ItemPesanan::class, 'pesanan_id');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'pesanan_id');
    }
}
