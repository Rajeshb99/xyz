<?php

namespace Database\Seeders;

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
        Product::create([
            'category_id' => 1,
            'name' => 'Sample Product 1',
            'description' => 'Description for Sample Product 1',
            'sku' => 'PROD001',
            'price' => 19.99,
        ]);
    }
}
