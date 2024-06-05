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
                'category' => 'hamburger',
                'price' => 50.000,
            ],
            [
                'image_path' => 'storage/images/BurgerBulgogi.jpg',
                'name' => 'Burger Bulgogi',
                'category' => 'hamburger',
                'price' => 90.000,
            ],
            [
                'image_path' => 'storage/images/PhoMaiQue.jpg',
                'name' => 'Phô mai que',
                'category' => 'anyfood',
                'price' => 45.000,
            ],
            [
                'image_path' => 'storage/images/DuiGaRan.jpg',
                'name' => 'Đùi gà rán',
                'category' => 'chicken',
                'price' => 30.000,
            ],
            [
                'image_path' => 'storage/images/ComboBurger.jpg',
                'name' => 'Combo Burger',
                'category' => 'combo',
                'price' => 80.000,
            ],
            [
                'image_path' => 'storage/images/ComboGa1.jpg',
                'name' => 'Combo Gà rán 1',
                'category' => 'combo',
                'price' => 95.000,
            ],
            [
                'image_path' => 'storage/images/ComboDacBiet.jpg',
                'name' => 'Combo đặc biệt',
                'category' => 'combo',
                'price' => 225.000,
            ],
            [
                'image_path' => 'storage/images/ComboGa2.jpg',
                'name' => 'Combo Gà rán 2',
                'category' => 'combo',
                'price' => 110.000,
            ],
            [
                'image_path' => 'storage/images/CanhGaRan.jpg',
                'name' => 'Cánh gà rán',
                'category' => 'chicken',
                'price' => 50.000,
            ],
            [
                'image_path' => 'storage/images/UcGaRan.jpg',
                'name' => 'Ức gà rán',
                'category' => 'chicken',
                'price' => 75.000,
            ],
            [
                'image_path' => 'storage/images/DuiGaSot.jpg',
                'name' => 'Đùi gà sốt',
                'category' => 'chicken',
                'price' => 65.000,
            ],
            [
                'image_path' => 'storage/images/MyYSotCua.jpg',
                'name' => 'Mỳ Ý sốt cua',
                'category' => 'rice-noodle',
                'price' => 65.000,
            ],
            [
                'image_path' => 'storage/images/MyYThitBam.jpg',
                'name' => 'Mỳ Ý thịt bằm',
                'category' => 'rice-noodle',
                'price' => 50.000,
            ],
            [
                'image_path' => 'storage/images/ComCaRiGa.png',
                'name' => 'Cơm cà ri gà',
                'category' => 'rice-noodle',
                'price' => 75.000,
            ],
            [
                'image_path' => 'storage/images/ComBoXao.png',
                'name' => 'Cơm bò xào',
                'category' => 'rice-noodle',
                'price' => 80.000,
            ],
            [
                'image_path' => 'storage/images/BurgerNam.jpg',
                'name' => 'Burger sốt nấm',
                'category' => 'hamburger',
                'price' => 65.000,
            ],
            [
                'image_path' => 'storage/images/BurgerDacBiet.jpg',
                'name' => 'Burger đặc biệt',
                'category' => 'hamburger',
                'price' => 80.000,
            ],
            [
                'image_path' => 'storage/images/KemVani.jpg',
                'name' => 'Kem vani',
                'category' => 'icream',
                'price' => 50.000,
            ],
            [
                'image_path' => 'storage/images/KemChoco.jpg',
                'name' => 'Kem chocolate',
                'category' => 'icream',
                'price' => 50.000,
            ],
            [
                'image_path' => 'storage/images/KemDau.jpg',
                'name' => 'Kem dâu',
                'category' => 'icream',
                'price' => 50.000,
            ],
            [
                'image_path' => 'storage/images/KemCookie.jpg',
                'name' => 'Kem Oreo',
                'category' => 'icream',
                'price' => 50.000,
            ],
            [
                'image_path' => 'storage/images/Pepsi.jpg',
                'name' => 'Pepsi',
                'category' => 'drink',
                'price' => 10.000,
            ],
            [
                'image_path' => 'storage/images/Sprite.jpg',
                'name' => 'Sprite',
                'category' => 'drink',
                'price' => 10.000,
            ],
            [
                'image_path' => 'storage/images/FantaCam.jpg',
                'name' => 'Fanta Cam',
                'category' => 'drink',
                'price' => 10.000,
            ],
            [
                'image_path' => 'storage/images/FantaNho.jpg',
                'name' => 'Fanta Nho',
                'category' => 'drink',
                'price' => 10.000,
            ],
            [
                'image_path' => 'storage/images/KhoaiTayChien.jpg',
                'name' => 'Khoai tây chiên',
                'category' => 'anyfood',
                'price' => 30.000,
            ],
            [
                'image_path' => 'storage/images/BanhHanhChien.png',
                'name' => 'Bánh hành',
                'category' => 'anyfood',
                'price' => 30.000,
            ],
            [
                'image_path' => 'storage/images/KhoaiTaySot.jpg',
                'name' => 'Khoai tây sốt',
                'category' => 'anyfood',
                'price' => 45.000,
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
