<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requst extends Model
{
    use HasFactory;

     protected $fillable = [
        'customer_name',
        'service_id',
        'description',
        'state',
        'price',
    ];
        public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
