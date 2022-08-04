<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use App\Models\Kin;
use App\Models\Subcity;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factories
        // User::factory(50)->create();
        // Employee::factory(50)->create();
        // Kin::factory(50)->create();
        // seeders
        $this->call(SubCitySeeder::class);
    }
}
