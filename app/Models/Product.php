<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id','id')  ;
    }
}
