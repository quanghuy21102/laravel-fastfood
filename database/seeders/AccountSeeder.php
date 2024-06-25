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
            ],
            [
                'email' => 'trinhquanghuy@gmail.com',
                'password' => '123456',
                'role' => 'customer',
            ],
        ];

        foreach ($accounts as $key => $value) {
            Account::create($value);
        }
    }
}
