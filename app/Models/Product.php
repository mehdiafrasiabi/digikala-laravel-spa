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


//    public function reSizeImage($photo, $productId, $width, $height, $folder)
//    {
//        $path = public_path('products/' . $productId . '/' . $folder);
//
//        if (!file_exists($path)) {
//            mkdir($path, 0755, true);
//        }
//
//        $manager = new ImageManager(new Driver());
//
//        $manager->read($photo->getRealPath())
//            ->scale($width, $height)
//            ->toWebp()
//            ->save($path . '/' . pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp');
//
//    }



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
        return $this->belongsTo(SeoItem::class, 'id', 'ref_id');
    }


}
