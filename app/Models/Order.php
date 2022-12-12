<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guareded = [];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function detailorder()
    {
        return $this->hasMany(DetailOrder::class);
    }
}
