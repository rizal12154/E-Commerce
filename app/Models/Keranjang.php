<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';

    public function produk()
    {
        return $this->hasMany(Produk::class, 'produk_id', 'produk_id');
    }

}

