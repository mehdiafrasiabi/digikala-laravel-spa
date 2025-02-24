<?php

namespace App\Repository;

interface CategoryRepositoryInterface
{
    public function submit($formData, $categoryId);
    public function submitToCategoryFeatureValue($formData, $valueId, $featureId);
    public function submitCategoryFeature($formData, $categoryId, $featureId);


}
