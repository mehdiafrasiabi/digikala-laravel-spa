<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function submit($formData, $countryId)
    {
        Country::query()->updateOrCreate(
            [
                'id' => $countryId,
            ],
            [
                'name' => $formData['name'],
            ]
        );
    }
}
