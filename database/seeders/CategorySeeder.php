<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_id' => 'CO',
                'category_name' => 'combo',
            ],
            [
                'category_id' => 'CH',
                'category_name' => 'chicken',
            ],
            [
                'category_id' => 'RN',
                'category_name' => 'rice_noodle',
            ],
            [
                'category_id' => 'HA',
                'category_name' => 'hamburger',
            ],
            [
                'category_id' => 'IC',
                'category_name' => 'ice_cream',
            ],
            [
                'category_id' => 'DR',
                'category_name' => 'drink',
            ],
            [
                'category_id' => 'AN',
                'category_name' => 'anyfood',
            ],
        ];

        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
