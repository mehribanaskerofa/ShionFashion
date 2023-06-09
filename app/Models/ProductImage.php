<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table='productimage';
    protected $guarded=[];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
