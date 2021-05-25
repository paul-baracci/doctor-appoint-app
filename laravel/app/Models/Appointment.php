<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Appointment extends Model
{
    use HasFactory;

    public $fillable = 'requester_email';

    public function service() {
	return $this->hasOne(Service::class);
    }
}
