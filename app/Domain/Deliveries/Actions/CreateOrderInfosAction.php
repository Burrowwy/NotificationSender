<?php

namespace App\Domain\Deliveries\Actions;

use App\Domain\Deliveries\Models\OrderInfo;

class CreateOrderInfosAction
{
    public function execute(array $fields): OrderInfo
    {
        $order_info = new OrderInfo();
        $order_info->fill($fields);
        $order_info->save();

        return $order_info;
    }
}