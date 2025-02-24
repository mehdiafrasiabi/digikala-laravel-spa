<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryMethod extends Model
{
    protected $guarded = [];
    public function submit($formData, $deliveryId)
    {
        DeliveryMethod::query()->updateOrCreate(
            [
                'id' => $deliveryId,
            ],
            [
                'name' => $formData['name'],
                'price' => $formData['price'],
            ]
        );
    }
}
