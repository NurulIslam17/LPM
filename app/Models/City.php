<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    use HasFactory;

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function area()
    {
        return $this->hasOne(Area::class, 'city_id', 'id');
    }
}
