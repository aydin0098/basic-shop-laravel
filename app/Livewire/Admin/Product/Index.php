<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SeoItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function edit()
    {

    }

    public function delete(Product $product)
    {
        $product->deleteProduct($product);


    }


    public function render()
    {
        $products = Product::query()
            ->with(['category','coverImage'])
            ->latest()
            ->orderByDesc('created_at')->paginate(20);

        return view('livewire.admin.product.index',[
            'products' => $products
        ])->layout('layouts.admin.app');
    }

}
