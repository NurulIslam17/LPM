<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AjaxCrud extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'city', 'image'];
}
