<?php

namespace Database\Seeders;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        $accounts = [
            [
                'email' => 'admin@admin.com',
                'password' => '123456',
                'role' => 'admin',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
//            [
//                'email' => 'trinhquanghuy@gmail.com',
//                'password' => Hash::make('123456'),
//                'role' => 'customer',
//            ],
        ];

        foreach ($accounts as $key => $value) {
            Account::create($value);
        }
    }
}
