<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class FeatureValues extends Component
{
    use WithPagination;
    public $featureId;
    public $valueId;
    public $featureName;
    public $value;

    public function mount(CategoryFeature $feature)
    {
        $this->featureId = $feature->id;
        $this->featureName = $feature->name;

    }

    public function submit($formData,CategoryFeatureValue $featureValue)
    {

        $validator = Validator::make($formData,[
            'value' => 'required|string|max:30',
        ],[
            '*.required' => 'فیلد مقدار ضروری است',
            '*.max' => 'حداکثر تعداد کارکتر ها : 30 ',
            '*.string' => 'فرمت نام اشتباه است ',
        ]);
        $validator->validate();
        $this->resetValidation();
        $featureValue->store($formData,$this->featureId,$this->valueId);
        $this->reset('value');
        $this->dispatch('success',[
            'message' => 'عملیات با موفقیت انجام شد',
            'icon' => 'success'
        ]);
    }

    public function edit($valueId)
    {
        $featureValue = CategoryFeatureValue::query()->where('id', $valueId)->first();
        if ($featureValue) {
            $this->value = $featureValue->value;
            $this->valueId = $featureValue->id;
            $this->featureId = $featureValue->category_feature_id;
        }

    }

    public function delete($valueId)
    {
        CategoryFeatureValue::query()->firstWhere('id',$valueId)->delete();
        $this->dispatch('success',[
            'message' => 'عملیات حذف موفقیت امیز بود',
            'icon' => 'success'
        ]);
    }


    public function render()
    {
        $featureValues = CategoryFeatureValue::query()->orderByDesc('created_at')
            ->where('category_feature_id',$this->featureId)->paginate(20);

        return view('livewire.admin.category.feature-values.index',[
            'featureValues' => $featureValues
        ])->layout('layouts.admin.app');
    }
}
