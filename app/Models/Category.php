<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function facalties()
    {
        return $this->hasOne(Facalty::class, 'category_id', 'id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
