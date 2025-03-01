<?php

namespace App\Repository;

use App\Models\Product;
use App\Models\ProductImage;

interface ProductRepositoryInterface
{
    public function submit($formData, $productId, $photos, $coverIndex);

    public function submitToProduct($formData, $productId);

    public function submitToSeoItem($formData, $productId);

    public function submitToProductImage($photos, $productId, $coverIndex);

    public function saveImages($photos, $productId);

    public function generateProductCode();

    public function removeProduct(Product $product);


  //  public function submitProductContent($formData, $productId);
    public function removeOldPhoto($productImage, $productId);
    public function setCoverOldImage($photoId,$productId);
    public function submitProductFeatures($formData, $productId);


}
