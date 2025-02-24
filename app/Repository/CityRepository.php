<?php

namespace App\Repository;

use App\Models\City;

class CityRepository implements CityRepositoryInterface
{
    public function submit($formData, $cityId)
    {

        City::query()->updateOrCreate(
            [
                'id'=>$cityId
            ],
            [
                'name'=>$formData['name'],
                'state_id'=>$formData['stateId'],
            ]
        );
    }

}
