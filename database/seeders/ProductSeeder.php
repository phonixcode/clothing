<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'T-shirt',
                'slug' => 't-shirt',
                'description' => 'Comfortable cotton t-shirt',
                'stock' => 10,
                'image' => 't-shirt.jpg',
                'price' => 19.99,
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => ['red', 'blue', 'green'],
                'genders' => ['men', 'women'],
                'label' => 'new',
                'status' => 'active',
            ],
            [
                'title' => 'Jeans',
                'slug' => 'jeans',
                'description' => 'Classic denim jeans',
                'stock' => 5,
                'image' => 'jeans.jpg',
                'price' => 39.99,
                'sizes' => ['28', '30', '32', '34'],
                'colors' => ['blue', 'black'],
                'genders' => ['men', 'women'],
                'label' => 'popular',
                'status' => 'active',
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
