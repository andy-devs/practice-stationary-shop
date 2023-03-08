<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Бумага А4', 'image' => 'product1.jpg', 'description' => 'Стандартная бумага в формате A4 ', 'count' => 100, 'price' => 50, 'category_id' => 1],
            ['name' => 'Ручка Pilot', 'image' => 'product2.jpg', 'description' => 'Отличная ручка', 'count' => 15, 'price' => 150.50, 'category_id' => 2],
            ['name' => 'Акрильные краски', 'image' => 'product3.jpg', 'description' => 'Краски подходят для рисования на любых поверхностях', 'count' => 10, 'price' => 500, 'category_id' => 3],
            ['name' => 'Скоросшиватель', 'image' => 'product4.jpg', 'description' => 'Этот скоросшиватель подойдет для скрепления бумаги в формате A4', 'count' => 80, 'price' => 20, 'category_id' => 4],
            ['name' => 'Степлер', 'image' => 'product5.jpg', 'description' => 'Описание степлера', 'count' => 150, 'price' => 250.50, 'category_id' => 5],
            ['name' => 'Полки для папок', 'image' => 'product6.jpg', 'description' => 'Описание описание описание описание', 'count' => 35, 'price' => 1500.99, 'category_id' => 6],
        ];
        Product::insert($products);
    }
}
