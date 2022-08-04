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
                'woredas' => 10
            ],
            [
                'name' => 'bole',
                'woredas' => 11
            ],
            [
                'name' => 'gulele',
                'woredas' => 13
            ],
            [
                'name' => 'cherkos',
                'woredas' => 9
            ],
            [
                'name' => 'nifasilk',
                'woredas' => 10
            ],
            [
                'name' => 'akaki_kality',
                'woredas' => 8
            ],
            [
                'name' => 'yeka',
                'woredas' => 11
            ],
        ];

        Subcity::insert($subcities);
    }
}
