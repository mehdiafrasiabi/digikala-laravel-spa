<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function submit($formData)
    {
        Country::query()->create([
            'name' => $formData['name']
        ]);
    }
}
