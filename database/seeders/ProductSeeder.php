<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
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
                'product_name' => 'Burger phô mai',
                'price' => 50.000,
                'category_id' => 'hamburger',
            ],
            [
                'image_path' => 'storage/images/BurgerBulgogi.jpg',
                'product_name' => 'Burger Bulgogi',
                'price' => 90.000,
                'category_id' => 'hamburger',
            ],
            [
                'image_path' => 'storage/images/PhoMaiQue.jpg',
                'product_name' => 'Phô mai que',
                'price' => 45.000,
                'category_id' => 'any-food',
            ],
            [
                'image_path' => 'storage/images/DuiGaRan.jpg',
                'product_name' => 'Đùi gà rán',
                'price' => 30.000,
                'category_id' => 'chicken',
            ],
            [
                'image_path' => 'storage/images/ComboBurger.jpg',
                'product_name' => 'Combo Burger',
                'price' => 80.000,
                'category_id' => 'combo',
            ],
            [
                'image_path' => 'storage/images/ComboGa1.jpg',
                'product_name' => 'Combo Gà rán 1',
                'price' => 95.000,
                'category_id' => 'combo',
            ],
            [
                'image_path' => 'storage/images/ComboDacBiet.jpg',
                'product_name' => 'Combo đặc biệt',
                'price' => 225.000,
                'category_id' => 'combo',
            ],
            [
                'image_path' => 'storage/images/ComboGa2.jpg',
                'product_name' => 'Combo Gà rán 2',
                'price' => 110.000,
                'category_id' => 'combo',
            ],
            [
                'image_path' => 'storage/images/CanhGaRan.jpg',
                'product_name' => 'Cánh gà rán',
                'price' => 50.000,
                'category_id' => 'chicken',
            ],
            [
                'image_path' => 'storage/images/UcGaRan.jpg',
                'product_name' => 'Ức gà rán',
                'price' => 75.000,
                'category_id' => 'chicken',
            ],
            [
                'image_path' => 'storage/images/DuiGaSot.jpg',
                'product_name' => 'Đùi gà sốt',
                'price' => 65.000,
                'category_id' => 'chicken',
            ],
            [
                'image_path' => 'storage/images/MyYSotCua.jpg',
                'product_name' => 'Mỳ Ý sốt cua',
                'price' => 65.000,
                'category_id' => 'rice-noodle',
            ],
            [
                'image_path' => 'storage/images/MyYThitBam.jpg',
                'product_name' => 'Mỳ Ý thịt bằm',
                'price' => 50.000,
                'category_id' => 'rice-noodle',
            ],
            [
                'image_path' => 'storage/images/ComCaRiGa.png',
                'product_name' => 'Cơm cà ri gà',
                'price' => 75.000,
                'category_id' => 'rice-noodle',
            ],
            [
                'image_path' => 'storage/images/ComBoXao.png',
                'product_name' => 'Cơm bò xào',
                'price' => 80.000,
                'category_id' => 'rice-noodle',
            ],
            [
                'image_path' => 'storage/images/BurgerNam.jpg',
                'product_name' => 'Burger sốt nấm',
                'price' => 65.000,
                'category_id' => 'hamburger',
            ],
            [
                'image_path' => 'storage/images/BurgerDacBiet.jpg',
                'product_name' => 'Burger đặc biệt',
                'price' => 80.000,
                'category_id' => 'hamburger',
            ],
            [
                'image_path' => 'storage/images/KemVani.jpg',
                'product_name' => 'Kem vani',
                'price' => 50.000,
                'category_id' => 'ice-cream',
            ],
            [
                'image_path' => 'storage/images/KemChoco.jpg',
                'product_name' => 'Kem chocolate',
                'price' => 50.000,
                'category_id' => 'ice-cream',
            ],
            [
                'image_path' => 'storage/images/KemDau.jpg',
                'product_name' => 'Kem dâu',
                'price' => 50.000,
                'category_id' => 'ice-cream',
            ],
            [
                'image_path' => 'storage/images/KemCookie.jpg',
                'product_name' => 'Kem Oreo',
                'price' => 50.000,
                'category_id' => 'ice-cream',
            ],
            [
                'image_path' => 'storage/images/Pepsi.jpg',
                'product_name' => 'Pepsi',
                'price' => 10.000,
                'category_id' => 'drink',
            ],
            [
                'image_path' => 'storage/images/Sprite.jpg',
                'product_name' => 'Sprite',
                'price' => 10.000,
                'category_id' => 'drink',
            ],
            [
                'image_path' => 'storage/images/FantaCam.jpg',
                'product_name' => 'Fanta Cam',
                'price' => 10.000,
                'category_id' => 'drink',
            ],
            [
                'image_path' => 'storage/images/FantaNho.jpg',
                'product_name' => 'Fanta Nho',
                'price' => 10.000,
                'category_id' => 'drink',
            ],
            [
                'image_path' => 'storage/images/KhoaiTayChien.jpg',
                'product_name' => 'Khoai tây chiên',
                'price' => 30.000,
                'category_id' => 'any-food',
            ],
            [
                'image_path' => 'storage/images/BanhHanhChien.png',
                'product_name' => 'Bánh hành',
                'price' => 30.000,
                'category_id' => 'any-food',
            ],
            [
                'image_path' => 'storage/images/KhoaiTaySot.jpg',
                'product_name' => 'Khoai tây sốt',
                'price' => 45.000,
                'status' => 'inactive',
                'category_id' => 'any-food',
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
