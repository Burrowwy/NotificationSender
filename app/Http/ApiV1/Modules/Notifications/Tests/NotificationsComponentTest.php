<?php

use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\post;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST http://localhost:8001/NotificationSender/v1/notifications 201', function () {
    post('http://localhost:8001/NotificationSender/v1/notifications')
        ->assertStatus(201);
});

test('POST http://localhost:8001/NotificationSender/v1/notifications 400', function () {
    post('http://localhost:8001/NotificationSender/v1/notifications')
        ->assertStatus(400);
});
    
test('POST http://localhost:8000/NotificationSender/v1/notifications 201', function () {
    post('http://localhost:8000/NotificationSender/v1/notifications')
        ->assertStatus(201);
});

test('POST http://localhost:8000/NotificationSender/v1/notifications 400', function () {
    post('http://localhost:8000/NotificationSender/v1/notifications')
        ->assertStatus(400);
});
