<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";

    use Sortable;
    public $sortable = [ 'title','price','created_at'];

    public function image() {
        return $this->belongsTo(Image::class);
    }
}
