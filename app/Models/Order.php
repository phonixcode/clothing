<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'total_amount',
        'payment_method',
        'payment_status',
        'order_status',
        'delivery_charge',
        'order_items',
    ];

    protected $casts = [
        'order_items' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
