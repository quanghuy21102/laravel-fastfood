<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'image_path' => 'storage/images/BurgerPhoMai.jpg',
                'name' => 'Burger phô mai',
                'category' => 'Burger',
                'price' => 50,
            ],
            [
                'image_path' => 'storage/images/BurgerBulgogi.jpg',
                'name' => 'Burger Bulgogi',
                'category' => 'Burger',
                'price' => 90,
            ],
            [
                'image_path' => 'storage/images/PhoMaiQue.jpg',
                'name' => 'Phô mai que',
                'category' => 'Anyfood',
                'price' => 45,
            ],
            [
                'image_path' => 'storage/images/DuiGaRan.jpg',
                'name' => 'Đùi gà rán',
                'category' => 'Chicken',
                'price' => 30,
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
