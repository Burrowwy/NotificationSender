<?php

namespace App\Domain\Deliveries\Models;

use App\Domain\Deliveries\Models\Tests\Factories\ClientInfoFactory;
use Illuminate\Database\Eloquent\Model;

class ClientInfo extends Model
{
    protected $table = 'client_infos';
    public $timestamps = false;
    protected $fillable = ['client_name', 'phone', 'email'];

    public function order_infos()
    {
        return $this->hasMany(OrderInfo::class);
    }
    public static function factory(): ClientInfoFactory
    {
        return ClientInfoFactory::new();
    }
}
