<?php

namespace App\Domain\Deliveries\Actions;

use App\Domain\Deliveries\Models\ClientInfo;
use App\Domain\Deliveries\Models\Tests\Factories\ClientInfoFactory;

class CreateClientInfosAction
{
    public function execute(array $fields): ClientInfo
    {
        $client_info = new ClientInfo();
        $client_info->fill($fields);
        $client_info->save();
        return $client_info;
    }
}