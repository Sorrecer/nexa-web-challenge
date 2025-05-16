<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            'Instant Coffees',
            'Coffee Makers',
            'Coffee Accessories',
            'Coffee Gift Sets'
        ];

        foreach ($data as $name) {
            Category::create(['name' => $name]);
        }
    }
}
