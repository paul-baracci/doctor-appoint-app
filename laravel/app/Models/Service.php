<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Model\Appointment;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";

    use Sortable;
    public $sortable = [ 'title','price','created_at'];

    public function appointments() {
	return $this->hasMany(Appointment::class);
    }
}
