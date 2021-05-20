<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'name'
    ];

    public function posts() {
        return $this->morphedByMany(Post::class, 'taggables');
    }

    public function products() {
        return $this->morphedByMany(Product::class, 'taggables');
    }
}
