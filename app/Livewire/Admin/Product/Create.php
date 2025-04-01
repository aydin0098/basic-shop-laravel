<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $categories = [];
    public $sellers = [];

    public $photos = [];

    public $productId;

    public $name;
    public $slug;
    public function mount()
    {
        $this->categories = Category::all();
        $this->sellers = Seller::all();

    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name,'-',null);

    }

    public function submit($formData,Product $product)
    {

        if (isset($formData['featured']))
        {
            $formData['featured'] = true;
        }else
        {
            $formData['featured'] = false;
        }

        $formData['photos']  = $this->photos;

        $validator = Validator::make($formData,[
            'name' => 'required|string',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'slug' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'stock' => 'required|integer',
            'discount_duration' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'seller_id' => 'nullable|exists:sellers,id',
            'featured' => 'nullable|boolean',
        ],[
            'name.required' => 'فیلد عنوان ضروری است',
            'slug.required' => 'فیلد اسلاگ ضروری است',
            'price.required' => 'فیلد قیمت ضروری است',
            'stock.required' => 'فیلد موجودی ضروری است',
            'category_id.required' => 'فیلد دسته بندی ضروری است',
            '*.max' => 'حداکثر تعداد کارکتر ها : 50 ',
            '*.string' => 'فرمت نام اشتباه است ',
            'category_id.exists' => 'دسته نامعتبر است',
            'seller_id.exists' => 'فروشنده نامعتبر است',
            'photos.*.image' => 'فرمت عکس نامعتبر است',
        ]);
        $validator->validate();
        $this->resetValidation();
        $product->store($formData,$this->productId,$this->photos);
        $this->reset();
        $this->dispatch('success',[
            'message' => 'عملیات با موفقیت انجام شد',
            'icon' => 'success'
        ]);

    }



    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}
