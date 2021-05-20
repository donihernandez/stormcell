<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'user_id',
      'title',
      'body'
    ];

    public function images() {
        return $this->morphToMany(Image::class, 'pictures');
    }

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggables');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
