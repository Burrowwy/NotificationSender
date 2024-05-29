<?php

namespace App\Domain\Deliveries\Actions;

use App\Http\ApiV1\Modules\Notifications\Requests\PostStatusChangedNotificationRequest;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class NotificationOrders
{
    public static function notification($request): void
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
        $msg = "Dear.$name\n" .
            "Your order($order_name) is currently in $location\n" .
            "Data updated: $data_time";


        error_log('notification sent !!');
        error_log($msg);
        #Mail::to($to)->send(new OrderShipped($subject, $msg));
    }
}
