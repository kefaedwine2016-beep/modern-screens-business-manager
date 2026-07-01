<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'Magnetic Mosquito Screen',
            'unit' => 'm²',
            'selling_price' => 2500,
            'description' => 'Premium magnetic insect screen',
            'active' => true,
        ]);

        Product::create([
            'product_name' => 'Velcro Mosquito Screen',
            'unit' => 'm²',
            'selling_price' => 1500,
            'description' => 'Velcro insect screen',
            'active' => true,
        ]);

        Product::create([
            'product_name' => 'Retractable Mosquito Screen',
            'unit' => 'm²',
            'selling_price' => 10000,
            'description' => 'Retractable insect screen',
            'active' => true,
        ]);
    }
}