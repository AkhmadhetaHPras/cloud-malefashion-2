<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function cartitem()
    {
        return $this->hasMany(CartItem::class);
    }

    public function order()
    {
        return $this->hasManyThrough(Order::class, Address::class);
    }

    // myorder
    public function waitingorder()
    {
        return $this->order()->where('status', 'Waiting Confirmation')->orderBy('id', 'desc');
    }

    public function proceedorder()
    {
        return $this->order()->where('status', 'Processed')->orderBy('id', 'desc');
    }
    public function sentorder()
    {
        return $this->order()->where('status', 'Sent')->orderBy('id', 'desc');
    }
    public function completeorder()
    {
        return $this->order()->where('status', 'Completed')->orderBy('id', 'desc');
    }
    public function canceledorder()
    {
        return $this->order()->where('status', 'Canceled')->orderBy('id', 'desc');
    }
    public function rejectedorder()
    {
        return $this->order()->where('status', 'Rejected')->orderBy('id', 'desc');
    }
}
