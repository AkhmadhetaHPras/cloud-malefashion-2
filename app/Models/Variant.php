<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $guareded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cartitem()
    {
        return $this->hasMany(CartItem::class);
    }

    public function detailorder()
    {
        return $this->hasMany(DetailOrder::class);
    }
}
