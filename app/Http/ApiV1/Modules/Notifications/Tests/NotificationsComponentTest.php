<?php

namespace App\Http\ApiV1\Modules\Notifications\Tests;

use Tests\TestCase;

class NotificationsComponentTest extends TestCase
{
    public function test_post_status_200(): void
    {
        $data = [
            'client_info' => [
                'client_name' => 'Kirill',
                'phone' => '+71111111111',
                'email' => 'krllbobrov@gmail.com',
            ],
            'status_info' => [
                'order_name' => 'Shoes',
                'status' => 'accepted',
                'current_location' => 'Moscow',
                'updated_at' => '2024-04-11T14:04:40.000000Z',
            ],
        ];
        $response = $this->postJson('/api/v1/notifications', $data)->assertStatus(200)
        ;

    }

    public function test_invalid_status(): void
    {
        $data = [
            'client_info' => [
                'client_name' => 'Kirill',
                'phone' => '+71111111111',
                'email' => 'krllbobrov@gmail.com',
            ],
            'status_info' => [
                'order_name' => 'Shoes',
                'status' => 'xxx',
                'current_location' => 'Moscow',
                'updated_at' => '2024-04-11T14:04:40.000000Z',
            ],
        ];
        $response = $this->postJson('/api/v1/notifications', $data)->assertStatus(400)->assertJson(
            [
            'errors' => [[
            'message' => "Выбранное значение для status info.status ошибочно."]]]
        );
    }
    public function test_invalid_phone(): void
    {
        $data = [
            'client_info' => [
                'client_name' => 'Kirill',
                'phone' => '+222',
                'email' => 'krllbobrov@gmail.com',
            ],
            'status_info' => [
                'order_name' => 'Shoes',
                'status' => 'xxx',
                'current_location' => 'Moscow',
                'updated_at' => '2024-04-11T14:04:40.000000Z',
            ],
        ];
        $response = $this->postJson('/api/v1/notifications', $data)->assertStatus(400)->assertJson(
            [
                'errors' => [[
                                 'message' => "Поле client info.phone имеет ошибочный формат."]]]
        );
    }
}
