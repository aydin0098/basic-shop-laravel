<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFeature extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function values()
    {
        return $this->hasMany(CategoryFeatureValue::class);

    }

    public function store($formData, $categoryId , $featureId)
    {
        CategoryFeature::query()->updateOrCreate(
            [
                'id' => $featureId
            ],
            [
                'name' => $formData['name'],
                'category_id' => $categoryId,
            ]
        );
    }
}
