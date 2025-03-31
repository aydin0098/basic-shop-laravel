<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function store($formData, $productId)
    {
//        dd($formData);

        $product = $this->createProduct($formData,$productId);
        $this->createSeoItems($product->id,$formData);
    }

    public function createProduct($formData,$productId)
    {
        return Product::query()->updateOrCreate(
            [
                'id' => $productId
            ],
            [
                'name' => $formData['name'],
                'price' => $formData['price'],
                'discount' => $formData['discount'] ? $formData['discount'] : null,
                'stock' => $formData['stock'],
                'discount_duration' => $formData['discount_duration'] ? $formData['discount_duration'] : null,
                'category_id' => $formData['category_id'],
                'seller_id' => $formData['seller_id'] ?? null,
                'featured' => $formData['featured'],

            ]
        );

    }

    public function createSeoItems($productId,$formData)
    {
        return SeoItem::query()->updateOrCreate(
            [
                'type' => 'product',
                'ref_id' => $productId
            ],
            [
                'slug' => $formData['slug'],
                'meta_title' => $formData['meta_title'],
                'meta_description' => $formData['meta_description'],
            ]

        );
    }
}
