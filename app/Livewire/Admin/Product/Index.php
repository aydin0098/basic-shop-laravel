<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SeoItem;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function edit()
    {

    }

    public function delete($product_id)
    {
        $product =  Product::query()->where('id',$product_id)->first();
        if ($product)
        {
            $product->delete();
        }

        SeoItem::query()->where('ref_id',$product_id)->delete();

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
