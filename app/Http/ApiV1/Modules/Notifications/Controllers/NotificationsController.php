<?php

namespace App\Http\ApiV1\Modules\Notifications\Controllers;

use App\Http\ApiV1\Modules\Notifications\Requests\PostStatusChangedNotificationRequest;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class NotificationsController
{

    public function post(PostStatusChangedNotificationRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Данные успешно получены',
        ], 200);
    }
}
