<?php

namespace App\Repository;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function submit($formData, $categoryId)
    {
        if ($formData['parentId'] == "") {
            $formData['parentId'] = null;
        }
        Category::query()->updateOrCreate(
            [
                'id' => $categoryId
            ],
            [
                'name' => $formData['name'],
                'category_id' => $formData['parentId'],
            ]
        );
    }
    public function submitToCategoryFeatureValue($formData, $valueId, $featureId)
    {
        CategoryFeatureValue::query()->updateOrCreate(
            [
                'id' => $valueId
            ],
            [
                'value' => $formData['value'],
                'category_feature_id' => $featureId
            ]
        );
    }
    public function submitCategoryFeature($formData, $categoryId, $featureId)
    {
        CategoryFeature::query()->updateOrCreate(
            [
                'id' => $featureId
            ],
            [
                'name' => $formData['name'],
                'category_id' => $categoryId
            ]
        );
    }
}
