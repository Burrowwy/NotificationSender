<?php

namespace App\Http\ApiV1\Modules\Notifications\Controllers;

use App\Domain\Deliveries\Actions\NotificationOrders;
use App\Http\ApiV1\Modules\Notifications\Requests\PostStatusChangedNotificationRequest;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class NotificationsController
{
    public function post(PostStatusChangedNotificationRequest $request): void
    {
        NotificationOrders::notification($request);
    }
}
