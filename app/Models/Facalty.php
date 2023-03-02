<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Category;

class Facalty extends Model
{
    use HasFactory;

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
