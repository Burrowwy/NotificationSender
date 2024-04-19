<?php

namespace App\Domain\Deliveries\Models;

use App\Domain\Deliveries\Models\Tests\Factories\OrderInfoFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    protected $table = 'order_infos';
    protected $fillable = ['client_info_id', 'order_name', 'weight'];
    public $timestamps = false;

    public function client_info()
    {
        return $this->belongsTo(ClientInfo::class);
    }
    public function delivery_info()
    {
        return $this->hasOne(DeliveryInfo::class);
    }
    public static function factory(): OrderInfoFactory
    {
        return OrderInfoFactory::new();
    }
}
