<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];
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
    public function parent()
    {
        return $this->belongsTo(Category::class,'category_id','id');

    }

    public function children()
    {
        return $this->hasMany(Category::class,'category_id','id');

    }


}
