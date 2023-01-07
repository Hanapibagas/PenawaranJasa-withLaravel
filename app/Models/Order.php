<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'freelance_id',
        'services_id',
        'file',
        'note',
        'expires',
        'order_statuses',
    ];

    public function UserBuyer()
    {
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }

    public function UserFreelance()
    {
        return $this->belongsTo(User::class, 'freelance_id', 'id');
    }

    public function Service()
    {
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }

    public function StatusOrder()
    {
        return $this->belongsTo(OrderStatus::class, 'order_statuses', 'id');
    }
}
