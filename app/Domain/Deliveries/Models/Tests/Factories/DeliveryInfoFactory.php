<?php

namespace App\Domain\Deliveries\Models\Tests\Factories;

use App\Domain\Deliveries\Models\DeliveryInfo;
use Ensi\LaravelTestFactories\BaseModelFactory;

class DeliveryInfoFactory extends BaseModelFactory
{
    protected $model = DeliveryInfo::class;

    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['accepted', 'processing', 'in_transit', 'delivered', 'picked_up']),
            'current_location' => $this->faker->city(),
            'need_notify' => $this->faker->boolean(),
        ];
    }
}
