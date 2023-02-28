<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImgOnly;

class Productimg extends Model
{
    use HasFactory;
    public function productImages()
    {

        return $this->hasMany(ProductImgOnly::class,'product_id','id');
    }
}
