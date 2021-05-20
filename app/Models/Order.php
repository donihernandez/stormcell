<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_number',
        'cart_id',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function shipment() {
        return $this->hasOne(Shipment::class);
    }
}
