<?php

namespace App\Repository;

use App\Models\State;

class StateRepository implements StateRepositoryInterface
{
    public function submit($formData, $stateId)
    {
        State::query()->updateOrCreate(
            [
                'id' => $stateId,
            ],
            [
                'name' => $formData['name'],
                'country_id' => $formData['countryId'],
            ]
        );
    }
}
