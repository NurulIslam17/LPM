<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;

class City extends Model
{
    use HasFactory;

    public function getDivision()
    {
        return $this->belongsTo(Division::class);
    }
}
