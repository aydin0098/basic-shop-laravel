<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    public function coverImage()
    {
        return $this->belongsTo(Product::class,'product_id','id');

    }
}
