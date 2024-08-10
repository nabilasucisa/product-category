<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Samsung J2 Prime', 'price' => 1500000, 'image' => 'j2prime.jpg', 'category_id' => 1],
            ['name' => 'Thinkpad L390', 'price' => 2700000, 'image' => 'thinkpad.jpg', 'category_id' => 1],
            ['name' => 'T-Shirt Stitch', 'price' => 79000, 'image' => 'tshirt.jpg', 'category_id' => 2],
            ['name' => 'Blender Philips', 'price' => 780000, 'image' => 'blender-philips.jpg', 'category_id' => 3],
            ['name' => 'Kiat-kiat Masuk TK Favorit', 'price' => 36000, 'image' => 'book.jpg', 'category_id' => 4],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
