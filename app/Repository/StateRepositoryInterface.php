<?php

namespace App\Repository;

interface StateRepositoryInterface
{
    public function submit($formData, $stateId);

}
