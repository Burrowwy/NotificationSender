<?php

namespace App\Domain\Deliveries\Models\Tests\Factories;

use App\Domain\Deliveries\Models\ClientInfo;
use Ensi\LaravelTestFactories\BaseModelFactory;

class ClientInfoFactory extends BaseModelFactory
{
    protected $model = ClientInfo::class;

    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
        ];
    }
}
