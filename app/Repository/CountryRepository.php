<?php

namespace App\Repository;

use App\Models\Country;

class CountryRepository implements CountryRepositoryInterface
{
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
