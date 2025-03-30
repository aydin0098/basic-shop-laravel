<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryFeatureValue extends Model
{
    protected $guarded = [];
    public function store($formData,$featureId,$valueId)
    {
        CategoryFeatureValue::query()->updateOrCreate(
            [
                'id' => $valueId
            ],
            [
                'value' => $formData['value'],
                'category_feature_id' => $featureId,
            ]
        );
    }
}
