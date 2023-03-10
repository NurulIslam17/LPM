<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->hasOne(City::class, 'division_id', 'id');
    }
    public function cities()
    {
        return $this->hasMany(City::class, 'division_id', 'id');
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'division', 'id');
    }
}
