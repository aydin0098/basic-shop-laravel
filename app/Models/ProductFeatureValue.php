<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValue extends Model
{
    protected $guarded = [];
    public function store($formData, $productId)
    {
        foreach ($formData as $value) {
            list($featureId, $featureValueId) = explode('_', $value);
            ProductFeatureValue::query()->updateOrCreate([
                'product_id' => $productId,
                'category_feature_id' => $featureId

            ],[
                'category_feature_value_id' => $featureValueId
            ]);
        }
    }
}
