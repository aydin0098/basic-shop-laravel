<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function store($formData, $productId, $photos)
    {
//        dd($formData);
        DB::transaction(function() use ($formData, $productId, $photos) {

            $product = $this->createProduct($formData, $productId);
            $this->createSeoItems($product->id, $formData);
            $this->storeProductImages($photos, $product->id, $formData);
            $this->saveResizeImages($photos, $product->id);
        });


    }

    public function createProduct($formData, $productId)
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

    public function createSeoItems($productId, $formData)
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

    public function storeProductImages($photos, $productId, $formData)
    {
        foreach ($photos as $photo) {
            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';
            ProductImage::query()->create([
                'path' => $path,
                'product_id' => $productId
            ]);
        }
    }

    public function saveResizeImages($photos, $productId)
    {
        foreach ($photos as $photo) {
            $this->resizeImage($photo, $productId, 100, 100, 'small');
            $this->resizeImage($photo, $productId, 300, 300, 'medium');
            $this->resizeImage($photo, $productId, 800, 800, 'large');
            $photo->delete();
        }
    }

    public function resizeImage($photo, $productId, $width, $height, $folder)
    {
        $path = public_path('products/' . $productId . '/' . $folder);
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $manager = new ImageManager(new Driver());
        $manager->read($photo->getRealPath())
            ->scale($width, $height)
            ->toWebp()
            ->save($path . '/' . pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp');
    }
}
