<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Category;

class Facalty extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasOne(Department::class, 'department_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id');
    }
}
