<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'account_id' => 1,
                'full_name' => 'Trịnh Quang Huy',
                'birthday' => Carbon::create(2002,11,2),
                'gender' => 'Nam',
                'phone' => '0123456789',
                'address' => '00 Lê Văn Sỹ P13, Q3',
                'city' => 'TP.HCM',
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
