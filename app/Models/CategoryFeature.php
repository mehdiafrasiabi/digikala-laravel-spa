<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFeature extends Model
{
    //
    use HasFactory;

    protected $guarded = [];



    public function values()
    {
        return $this->hasMany(CategoryFeatureValue::class, 'category_feature_id', 'id');
    }

    public function categoryFeatureValues()
    {
        return $this->hasMany(CategoryFeatureValue::class);

    }
    public function categoryFeature()
    {
        return $this->belongsTo(CategoryFeature::class);

    }
}
