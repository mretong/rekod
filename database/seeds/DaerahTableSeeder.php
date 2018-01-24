<?php

use Illuminate\Database\Seeder;
use App\Daerah;

class DaerahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Daerah::create([
        	'nama'	=>	'Sungai Petani',
        	'kod'	=>	'SP'
        ]);

        Daerah::create([
        	'nama'	=>	'Kota Setar',
        	'kod'	=>	'KS'
        ]);

        Daerah::create([
        	'nama'	=>	'Kulim',
        	'kod'	=>	'KLM'
        ]);

        Daerah::create([
        	'nama'	=>	'Kubang Pasu',
        	'kod'	=>	'KP'
        ]);

        Daerah::create([
        	'nama'	=>	'Baling',
        	'kod'	=>	'BLG'
        ]);

        Daerah::create([
        	'nama'	=>	'Pendang',
        	'kod'	=>	'PDG'
        ]);

        Daerah::create([
        	'nama'	=>	'Langkawi',
        	'kod'	=>	'LKW'
        ]);

        Daerah::create([
        	'nama'	=>	'Yan',
        	'kod'	=>	'YAN'
        ]);

        Daerah::create([
        	'nama'	=>	'Sik',
        	'kod'	=>	'SIK'
        ]);

        Daerah::create([
        	'nama'	=>	'Padang Terap',
        	'kod'	=>	'PT'
        ]);

        Daerah::create([
        	'nama'	=>	'Pokok Sena',
        	'kod'	=>	'PS'
        ]);

        Daerah::create([
        	'nama'	=>	'Bandar Baharu',
        	'kod'	=>	'BB'
        ]);

        Daerah::create([
        	'nama'	=>	'Perlis',
        	'kod'	=>	'PLS'
        ]);
    }
}
