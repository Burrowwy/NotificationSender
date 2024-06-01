<?php

namespace App\Http\ApiV1\Modules\Notifications\Controllers;

use App\Domain\Deliveries\Actions\NotificationOrders;
use App\Http\ApiV1\Modules\Notifications\Requests\PostStatusChangedNotificationRequest;


class NotificationsController
{
    public function post(PostStatusChangedNotificationRequest $request): void
    {
        NotificationOrders::notification($request);
    }
}
