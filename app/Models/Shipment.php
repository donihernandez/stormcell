<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'order_id',
      'delivery_cost',
      'discount',
      'final_price'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
