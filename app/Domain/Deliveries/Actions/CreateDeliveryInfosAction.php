<?php

namespace App\Domain\Deliveries\Actions;

use App\Domain\Deliveries\Models\DeliveryInfo;

class CreateDeliveryInfosAction
{
    public function execute(array $fields): DeliveryInfo
    {
        $delivery_info = new DeliveryInfo();
        $delivery_info->fill($fields);
        $delivery_info->save();

        return $delivery_info;
    }
}
