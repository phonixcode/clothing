<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'stock',
        'image',
        'price',
        'sizes',
        'colors',
        'genders',
        'label',
        'status',
    ];


    protected $casts = [
        'sizes' => 'array',
        'colors' => 'array',
        'genders' => 'array',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->title);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->title);
        });
    }

    public function setImageAttribute($value)
    {
        if ($value instanceof \Illuminate\Http\UploadedFile) {
            $imageName = time() . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('products'), $imageName);
            $this->attributes['image'] = 'products/' . $imageName;
        } else {
            $this->attributes['image'] = $value;
        }
    }

}
