<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Feature extends Component
{
    use WithPagination;
    public $categoryName;
    public $categoryId;
    public $featureId;
    public $name;

    public function mount(Category $category)
    {
        $this->categoryName = $category->name;
        $this->categoryId = $category->id;

    }

    public function submit($formData,CategoryFeature $feature)
    {

        $validator = Validator::make($formData,[
            'name' => 'required|string|max:30',
        ],[
            '*.required' => 'فیلد عنوان ضروری است',
            '*.max' => 'حداکثر تعداد کارکتر ها : 30 ',
            '*.string' => 'فرمت نام اشتباه است ',
        ]);
        $validator->validate();
        $this->resetValidation();
        $feature->store($formData,$this->categoryId,$this->featureId);
        $this->reset('name');
        $this->dispatch('success',[
            'message' => 'عملیات با موفقیت انجام شد',
            'icon' => 'success'
        ]);
    }

    public function edit($featureId)
    {
        $categoryFeature = CategoryFeature::query()->where('id', $featureId)->first();

        if ($categoryFeature) {
            $this->name = $categoryFeature->name;
            $this->featureId = $categoryFeature->id;
            $this->categoryId = $categoryFeature->category_id;
        }

    }

    public function delete($featureId)
    {
        $feature = CategoryFeature::query()->where('id',$featureId)->first();
        if ($feature->values()->exists())
        {
            $this->dispatch('success',[
                'message' => 'ویژگی دارای مقادیر است و نمیتوان ان را حذف کرد',
                'icon' => 'error'
            ]);
        }else{

            CategoryFeature::query()->firstWhere('id',$featureId)->delete();
            $this->dispatch('success',[
                'message' => 'عملیات حذف موفقیت امیز بود',
                'icon' => 'success'
            ]);
        }




    }


    public function render()
    {
        $features = CategoryFeature::query()->orderByDesc('created_at')
            ->where('category_id',$this->categoryId)->paginate(20);

        return view('livewire.admin.category.feature.index',[
            'features' => $features
        ])->layout('layouts.admin.app');
    }
}
