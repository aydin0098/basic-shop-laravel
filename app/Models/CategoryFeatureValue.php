<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryFeatureValue extends Model
{
    use SoftDeletes;
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
