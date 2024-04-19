<?php

namespace App\Http\ApiV1\Modules\Notifications\Resources;

use App\Domain\Deliveries\Models\ClientInfo;
use App\Domain\Deliveries\Models\OrderInfo;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin ClientInfo
 * @mixin OrderInfo
 */
class NotificationsResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'client_name' => $this->client_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'order_name' => $this->order_name,
            'status' => $this->status,
            'current_location' => $this->current_location,
            'updated_at' => $this->updated_at,
        ];
    }
}
