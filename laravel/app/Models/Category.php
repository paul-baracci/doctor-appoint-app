<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function articles() {
        return $this->hasMany(Article::class);
        }
    public function services() {
        return $this->hasMany(Service::class);
        }
    public function image() {
        return $this->belongsTo(Image::class);
    }
}
