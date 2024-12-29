<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'name',
        'description',
        'price',
        'stock',
        'image_url'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
