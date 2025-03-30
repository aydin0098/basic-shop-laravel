<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $categories = [];

    public $name;
    public $categoryId;
    public $category_id;

    public function mount()
    {
        $this->categories = Category::all();

    }

    public function submit($formData,Category $category)
    {

        $validator = Validator::make($formData,[
            'name' => 'required|string|max:30',
            'category_id' => 'exists:categories,id',
        ],[
            '*.required' => 'فیلد عنوان ضروری است',
            '*.max' => 'حداکثر تعداد کارکتر ها : 30 ',
            '*.string' => 'فرمت نام اشتباه است ',
            'category_id.exists' => 'دسته نامعتبر است',
        ]);
        $validator->validate();
        $this->resetValidation();
        $category->store($formData,$this->categoryId);
        $this->reset();
        $this->dispatch('success',[
            'message' => 'عملیات با موفقیت انجام شد',
            'icon' => 'success'
        ]);

    }


    public function edit($categoryId)
    {
        $category = Category::query()->firstWhere('id',$categoryId);
        if ($category)
        {
            $this->name = $category->name;
            $this->categoryId = $category->id;
            $this->category_id = $category->category_id;
        }

    }

    public function delete($categoryId)
    {
        $category = Category::query()->where('id',$categoryId)->first();
        if ($category->children()->exists())
        {
            $this->dispatch('success',[
                'message' => 'دسته دارای زیر دسته است و نمیتوان ان را حذف کرد',
                'icon' => 'error'
            ]);
        }else{

            Category::query()->firstWhere('id',$categoryId)->delete();
            $this->dispatch('success',[
                'message' => 'عملیات حذف موفقیت امیز بود',
                'icon' => 'success'
            ]);
        }




    }

    public function render()
    {
        $allCategories = Category::query()->with('category')->orderByDesc('created_at')->paginate(20);
        return view('livewire.admin.category.index',[
            'allCategories' => $allCategories
        ])->layout('layouts.admin.app');
    }
}
