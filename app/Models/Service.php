<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id','description'];

    public function catgory() {
        return $this->belongsTo(Catgory::class);
    }

    public function requst() {
        return $this->hasMany(Requst::class);
    }
}
