<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function image() {
        return $this->belongsTo(Image::class);
    }
}
