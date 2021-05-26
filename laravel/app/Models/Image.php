<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Category;
use App\Models\Doctor;

class Image extends Model
{
    use HasFactory;

    public function article() {
        return $this->belongsTo(Article::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
