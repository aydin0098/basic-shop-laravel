<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function store($formData, $productId, $photos,$coverIndex)
    {
//        dd($formData);
        DB::transaction(function() use ($formData, $productId, $photos,$coverIndex) {

            $product = $this->createProduct($formData, $productId);
            $this->createSeoItems($product->id, $formData);
            $this->storeProductImages($photos, $product->id, $formData,$coverIndex);
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
                'p_code' => env('PRODUCT_CODE_NAME_START').'_'.$this->generateProductCode()

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

    public function storeProductImages($photos, $productId, $formData,$coverIndex)
    {
        ProductImage::query()->where('product_id', $productId)->update(['is_cover' => false]);

        foreach ($photos as $index => $photo) {

            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';

            ProductImage::query()->create(
                [
                    'path' => $path,
                    'product_id' => $productId,
                    'is_cover' => $index == $coverIndex,
                ]
            );
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

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class,'id','product_id')
            ->where('is_cover','=',true);

    }

    public function generateProductCode()
    {
        do {
            $randomCode = rand(1000,100000000);
            $checkCode = Product::query()->where('p_code',$randomCode)->first();

        }while($checkCode);

        return $randomCode;

    }

    public function seo()
    {
        return $this->belongsTo(SeoItem::class,'id','ref_id');

    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);

    }

    public function deleteProduct(Product $product)
    {
        DB::transaction(function () use ($product){

            $product =  Product::query()->where('id',$product->id)->first();
            $product->delete();
            ProductImage::query()->where('product_id',$product->id)->delete();
            SeoItem::query()->where('ref_id',$product->id)->delete();
            File::deleteDirectory('products/'.$product->p_code);
        });
    }
}
