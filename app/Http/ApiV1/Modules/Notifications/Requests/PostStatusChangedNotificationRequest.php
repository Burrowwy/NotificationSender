<?php

namespace App\Http\ApiV1\Modules\Notifications\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class PostStatusChangedNotificationRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            "client_info.client_name" => "required",
            "client_info.phone" => "required|unique:client_infos,phone|regex:/7\d{10}/",
            "client_info.email" => "required|unique:client_infos,email|email",
            "status_info.order_name" => "required",
            "status_info.status" => "required|in:accepted,processing,in_transit,delivered,picked_up",
            "status_info.current_location" => "required",
            "status_info.updated_at" => "required",
        ];
    }
}
