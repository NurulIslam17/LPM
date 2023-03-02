<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Department extends Model
{
    use HasFactory;
    public function facalties()
    {
        return $this->hasOne(Facalty::class, 'department_id', 'id');
    }
    public function category()
    {
        return $this->hasOne(Category::class, 'department_id', 'id');
    }
}
