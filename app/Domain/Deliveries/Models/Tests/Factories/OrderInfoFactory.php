<?php

namespace App\Domain\Deliveries\Models\Tests\Factories;

use App\Domain\Deliveries\Models\OrderInfo;
use Ensi\LaravelTestFactories\BaseModelFactory;

class OrderInfoFactory extends BaseModelFactory
{
    protected $model = OrderInfo::class;

    public function definition(): array
    {
        return [
            'order_name' => $this->faker->word(),
            'weight' => $this->faker->randomFloat(),
        ];
    }
}
