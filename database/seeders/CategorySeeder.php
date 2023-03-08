<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Бумажная продукция', 'slug' => 'paper_products'],
            ['name' => 'Пишущие принадлежности', 'slug' => 'writing_items'],
            ['name' => 'Товары для творчества', 'slug' => 'goods_for_creativity'],
            ['name' => 'Продукция для хранения документации', 'slug' => 'goods_for_storing_documentation'],
            ['name' => 'Товары для оформления документации', 'slug' => 'goods_for_documentation'],
            ['name' => 'Архивы и органайзеры', 'slug' => 'archives_and_organisers'],
        ];
        Category::insert($categories);
    }
}
