<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Sample Category 1',
            'description' => 'Description for Sample Category 1',
        ]);

        // Add more categories as needed
    }
}
