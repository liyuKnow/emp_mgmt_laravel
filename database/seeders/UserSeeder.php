<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        $users =  [
            [
                'first_name' => 'wonde',
                'last_name' => 'mekonin',
                'username' => 'wonde',
                'gender' => 'male',
                'password' => 'wonde@emp_mgmt',
                'user_type' => 'admin',
            ],
            [
                'first_name' => 'elias',
                'last_name' => 'Ibrahim',
                'username' => 'elias',
                'gender' => 'male',
                'password' => 'elias@emp_mgmt',
                'user_type' => 'employee',
            ],
            [
                'first_name' => 'kasu',
                'last_name' => 'moges',
                'username' => 'kasu',
                'gender' => 'male',
                'password' => 'kasu@emp_mgmt',
                'user_type' => 'admin',
            ],
        ];

        User::insert($users);
    }
}
