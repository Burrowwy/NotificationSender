<?php

namespace App\Domain\Deliveries\Models;

use App\Domain\Deliveries\Models\Tests\Factories\DeliveryInfoFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryInfo extends Model
{
    protected $table = 'delivery_infos';

    protected $fillable = ['order_info_id', 'status', 'current_location',
                           'need_notify', 'updated_at', 'created_at'];

    public static function factory(): DeliveryInfoFactory
    {
        return DeliveryInfoFactory::new();
    }
    public function order_info()
    {
        return $this->belongsTo(OrderInfo::class);
    }
}
