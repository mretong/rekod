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
        	'nama'	     =>	'Sungai Petani',
        	'kod'	     =>	'SP',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Kota Setar',
        	'kod'	=>	'KS',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Kulim',
        	'kod'	=>	'KLM',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Kubang Pasu',
        	'kod'	=>	'KP',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Baling',
        	'kod'	=>	'BLG',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Pendang',
        	'kod'	=>	'PDG',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Langkawi',
        	'kod'	=>	'LKW',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Yan',
        	'kod'	=>	'YAN',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Sik',
        	'kod'	=>	'SIK',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Padang Terap',
        	'kod'	=>	'PT',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Pokok Sena',
        	'kod'	=>	'PS',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Bandar Baharu',
        	'kod'	=>	'BB',
            'id_negeri'  => '1'
        ]);

        Daerah::create([
        	'nama'	=>	'Perlis',
        	'kod'	=>	'PLS',
            'id_negeri'  => '2'
        ]);
    }
}
