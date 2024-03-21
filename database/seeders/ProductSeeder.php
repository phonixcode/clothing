<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

    
        $products = [
            [
                'title' => 'Top',
                'slug' => 'top',
                'description' => $faker->paragraph(4),
                'stock' => 10,
                'image' => 'products/1.jpg',
                'price' => 19.99,
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => ['red', 'blue', 'green'],
                'genders' => ['men', 'women'],
                'label' => 'new',
                'status' => 'active',
            ],
            [
                'title' => 'Short',
                'slug' => 'short',
                'description' => $faker->paragraph(4),
                'stock' => 5,
                'image' => 'products/5.jpg',
                'price' => 39.99,
                'sizes' => ['28', '30', '32', '34'],
                'colors' => ['blue', 'black'],
                'genders' => ['men', 'women'],
                'label' => 'popular',
                'status' => 'active',
            ],
            [
                'title' => 'Short Top',
                'slug' => 'short-top',
                'description' => $faker->paragraph(4),
                'stock' => 5,
                'image' => 'products/2.jpg',
                'price' => 39.99,
                'sizes' => ['28', '30', '32', '34'],
                'colors' => ['blue', 'black'],
                'genders' => ['men', 'women'],
                'label' => 'popular',
                'status' => 'active',
            ],
            [
                'title' => 'Legg',
                'slug' => 'legg',
                'description' => $faker->paragraph(4),
                'stock' => 5,
                'image' => 'products/4.jpg',
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
