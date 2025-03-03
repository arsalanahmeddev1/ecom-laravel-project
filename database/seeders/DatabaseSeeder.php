<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
        ]);

        // Create products
        Product::create([
            'category_id' => $category->id,
            'name' => 'Smartphone',
            'slug' => 'smartphone',
            'description' => 'A cool smartphone',
            'price' => 299.99,
            'stock' => 10,
            'image' => 'images/smartphone.jpg',
        ]);

        Product::create([
            'category_id' => $category->id,
            'name' => 'Laptop',
            'slug' => 'laptop',
            'description' => 'A powerful laptop',
            'price' => 999.99,
            'stock' => 5,
            'image' => 'images/laptop.jpg',
        ]);
    }
}
