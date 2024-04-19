<?php

namespace App\Http\ApiV1\Modules\Notifications\Controllers;

use App\Http\ApiV1\Modules\Notifications\Requests\PostStatusChangedNotificationRequest;
use App\Mail\OrderShipped;
use App\Mail\SendMail;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationsController
{

    public function post(PostStatusChangedNotificationRequest $request): \Illuminate\Http\JsonResponse
    {
        $req_arr = $request->toArray();
        $client_info = $req_arr['client_info'];
        $status_info = $req_arr['status_info'];
        $name = $client_info['client_name'];
        $location = $status_info['current_location'];
        $order_name = $status_info['order_name'];
        $status = $status_info['status'];
        $data_time = $status_info['updated_at'];
        $to = $client_info['email'];

        $subject = "Order status $status";
        $msg = "Mr.$name\n".
                "Your order($order_name) is currently in $location\n".
                "Data updated: $data_time";


        Mail::to($to)->send(new OrderShipped($subject, $msg));


        return response()->json([
            'message' => 'Данные успешно получены',
        ], 200);
    }
}
