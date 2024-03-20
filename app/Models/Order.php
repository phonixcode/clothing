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
        'shipping_address',
        'shipping_city',
        'shipping_country',
    ];

    protected $casts = [
        'order_items' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getOrderItemsAttribute($value)
    {
        $orderItems = is_array($value) ? $value : json_decode($value, true);

        // Loop through order items and fetch product details
        $itemsWithProductDetails = [];
        foreach ($orderItems as $item) {
            $product = Product::find($item['product_id']);
            if ($product) {
                $item['product'] = $product;
                $itemsWithProductDetails[] = $item;
            }
        }

        return $itemsWithProductDetails;
    }
}
