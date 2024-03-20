<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlacedNotification;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'order_number' => 'required|unique:orders',
            'total_amount' => 'required|numeric|min:0',
            'payment_method' => 'required|in:cod',
            'order_items' => 'required|array',
            'shipping_address' => 'required|string',
            'shipping_city' => 'required|string',
            'shipping_country' => 'required|string',
        ]);

        // $order = Order::create($validatedData);
        $order = Order::create($validatedData);

        Mail::to('admin@example.com')->send(new OrderPlacedNotification($order));

        // After a successful order is placed, update the product stocks
        // foreach ($order->order_items as $item) {
        //     $product = Product::find($item['product_id']);
        //     if ($product) {
        //         $product->stock -= $item['quantity'];
        //         $product->save();
        //     }
        // }
        
        return response()->json(['message' => 'Order placed successfully', 'order' => $order], 201);
    }
}
