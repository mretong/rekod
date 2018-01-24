<?php

use Illuminate\Database\Seeder;
use App\Lokaliti;

class LokalitiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lokaliti::create([
        	'nama'	=>	'PPK Harapan Mewah Arau',
        	'kod'	=>	'A-I'
        ]);

        Lokaliti::create([
        	'nama'	=>	'PPK Muda Sepakat Kayang',
        	'kod'	=>	'B-I'
        ]);
    }
}
