<?php

namespace App\Models;

use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    //
    use HasFactory, softDeletes ,UploadFile;

    protected $guarded = [];

    public function submitProductContent($formData, $productId)
    {
        Product::query()->where('id', $productId)->update([
            'short_description' => $formData['short_description'],
            'long_description' => $formData['long_description'],
        ]);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', '=', true);
    }

    public function image()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function seo()
    {
        return $this->belongsTo(SeoItem::class, 'id', 'ref_id')->where('type', '=', 'product');
    }public function seller()
    {
        return $this->belongsTo(Seller::class);
    }


}
