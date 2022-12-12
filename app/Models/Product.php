<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guareded = [];

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function variant()
    {
        return $this->hasMany(Variant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function cartitem()
    {
        return $this->hasManyThrough(CartItem::class, Variant::class);
    }

    public function detailorder()
    {
        return $this->hasManyThrough(DetailOrder::class, Variant::class);
    }
}
