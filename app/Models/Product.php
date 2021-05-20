<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'name',
      'description',
      'size',
      'price',
      'discount',
      'type'
    ];

    public function images() {
        return $this->morphToMany(Image::class, 'pictures');
    }

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggables');
    }

    public function carts() {
        return $this->belongsToMany(Cart::class);
    }

    public function stock() {
        return $this->hasOne(Stock::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
