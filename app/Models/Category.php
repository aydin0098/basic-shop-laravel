<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    public function store($formData, $categoryId)
    {
        Category::query()->updateOrCreate(
            [
                'id' => $categoryId
            ],
            [
                'name' => $formData['name'],
                'category_id' => $formData['category_id'] == "" ? null : $formData['category_id'],
            ]
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function children()
    {
        return $this->hasMany(Category::class);

    }
}
