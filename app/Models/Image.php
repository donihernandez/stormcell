<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'url'
    ];

    public function posts() {
        return $this->morphedByMany(Post::class, 'pictures');
    }

    public function products() {
        return $this->morphedByMany(Product::class, 'pictures');
    }
}
