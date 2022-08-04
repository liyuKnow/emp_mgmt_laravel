<?php

namespace Database\Seeders;

use App\Models\Subcity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcity::truncate();

        $subcities =  [
            [
                'name' => 'lideta',
            ],
            [
                'name' => 'bole',
            ],
            [
                'name' => 'gulele',
            ],
            [
                'name' => 'cherkos',
            ],
            [
                'name' => 'nifasilk',
            ],
            [
                'name' => 'akaki_kality',
            ],
            [
                'name' => 'yeka',
            ],
        ];

        Subcity::insert($subcities);
    }
}
