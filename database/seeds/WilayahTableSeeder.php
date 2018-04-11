<?php

use Illuminate\Database\Seeder;
use App\Wilayah;

class WilayahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wilayah::create([
        	'nama'			=>	'Wilayah 1',
        	'kod'			=>	'W-I'
        	'id_daerah' 	=>	'13'
        ]);

        Wilayah::create([
        	'nama'			=>	'Wilayah 2',
        	'kod'			=>	'W-II'
        	'id_daerah' 	=>	'13'
        ]);

        Wilayah::create([
        	'nama'			=>	'Wilayah 3',
        	'kod'			=>	'W-III'
        	'id_daerah' 	=>	'13'
        ]);

        Wilayah::create([
        	'nama'			=>	'Wilayah 4',
        	'kod'			=>	'W-IV'
        	'id_daerah' 	=>	'13'
        ]);
    }
}
