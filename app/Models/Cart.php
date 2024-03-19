<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_items',
    ];

    protected $casts = [
        'cart_items' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
