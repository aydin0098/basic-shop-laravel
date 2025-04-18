<?php

namespace App\Livewire\Admin\Product;

use App\Models\CategoryFeature;
use App\Models\Product;
use App\Models\ProductFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Feature extends Component
{

    public $features;
    public $productId;

    public function mount(Product $product)
    {
        $categoryId = $product->category_id;
        $this->productId = $product->id;
        $this->features = CategoryFeature::query()->where('category_id', $categoryId)->get();

    }

    public function submit($formData,ProductFeatureValue $productFeatureValue)
    {
        $featureIds = [];
        $featureValueIds = [];
        foreach ($formData as $value) {
            list($featureId, $featureValueId) = explode('_', $value);
            $featureIds[] = $featureId;
            $featureValueIds[] = $featureId;
        }
        $data = [
            'feature_ids' => $featureIds,
            'feature_value_ids' => $featureValueIds
        ];

        $validator = Validator::make($data, [
            'feature_ids' => 'required|array',
            'feature_ids.*' => 'required|exists:category_features,id',
            'feature_value_ids' => 'required|array',
            'feature_value_ids.*' => 'required|exists:category_feature_values,id'
        ], [
            '*.required' => 'فیلد اجباری است ',
            '*.array' => 'نوع اطلاعات باید ارایه باشد',
            'feature_ids.*.exists' => 'ویژگی نامعتبر است',
            'feature_value_ids.*.exists' => 'مقادیر ویژگی نامعتبر است',

            ]
        );

        $validator->validate();
        $this->resetValidation();

        $productFeatureValue->store($formData,$this->productId);
    }

    public function render()
    {

        return view('livewire.admin.product.feature')->layout('layouts.admin.app');
    }
}
