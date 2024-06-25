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
                'category_id' => 'combo',
                'category_name' => 'Combo',
            ],
            [
                'category_id' => 'chicken',
                'category_name' => 'Gà rán',
            ],
            [
                'category_id' => 'rice-noodle',
                'category_name' => 'Cơm - Mì Ý',
            ],
            [
                'category_id' => 'hamburger',
                'category_name' => 'Hamburger',
            ],
            [
                'category_id' => 'ice-cream',
                'category_name' => 'Kem',
            ],
            [
                'category_id' => 'drink',
                'category_name' => 'Thức uống',
            ],
            [
                'category_id' => 'any-food',
                'category_name' => 'Món ăn kèm',
            ],
        ];

        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
