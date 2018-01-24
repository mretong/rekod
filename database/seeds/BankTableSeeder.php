<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Bank::create([
        	'nama'	=>	'Affin Bank Berhad',
        	'kod'	=>	'ABBM'
        ]);

        Bank::create([
        	'nama'	=>	'Affin Islamic Bank Berhad',
        	'kod'	=>	'AIBB'
        ]);

        Bank::create([
        	'nama'	=>	'Al Rajhi Banking & Investment Corporation (Malaysia) Berhad',
        	'kod'	=>	'ARBI'
        ]);

        Bank::create([
        	'nama'	=>	'Alliance Bank Malaysia Berhad',
        	'kod'	=>	'ABMB'
        ]);

        Bank::create([
        	'nama'	=>	'Alliance Islamic Bank Berhad',
        	'kod'	=>	'AIBB'
        ]);

        Bank::create([
        	'nama'	=>	'AmBank (Malaysia) Berhad',
        	'kod'	=>	'ABMB'
        ]);

        Bank::create([
        	'nama'	=>	'AmBank Islamic Berhad',
        	'kod'	=>	'ABIB'
        ]);

        Bank::create([
        	'nama'	=>	'Asian Finance Bank Berhad',
        	'kod'	=>	'AFBB'
        ]);

        Bank::create([
        	'nama'	=>	'Bank Islam Malaysia Berhad',
        	'kod'	=>	'BIMB'
        ]);

        Bank::create([
        	'nama'	=>	'Bank Muamalat Malaysia Berhad',
        	'kod'	=>	'BMMB'
        ]);

        Bank::create([
        	'nama'	=>	'CIMB Bank Berhad',
        	'kod'	=>	'CIMB'
        ]);

        Bank::create([
        	'nama'	=>	'CIMB Islamic Bank Berhad',
        	'kod'	=>	'CIBB'
        ]);

        Bank::create([
        	'nama'	=>	'HSBC Amanah Malaysia Berhad',
        	'kod'	=>	'HSBC'
        ]);

        Bank::create([
        	'nama'	=>	'Hong Leong Islamic Bank Berhad',
        	'kod'	=>	'HLIB'
        ]);

        Bank::create([
        	'nama'	=>	'Kuwait Finance House (Malaysia) Berhad',
        	'kod'	=>	'KFHB'
        ]);

        Bank::create([
        	'nama'	=>	'Malayan Banking Berhad',
        	'kod'	=>	'MBBM'
        ]);

        Bank::create([
        	'nama'	=>	'Maybank Islamic Berhad',
        	'kod'	=>	'MIMB'
        ]);

        Bank::create([
        	'nama'	=>	'OCBC Al-Amin Bank Berhad',
        	'kod'	=>	'OABB'
        ]);

        Bank::create([
        	'nama'	=>	'Public Bank Berhad',
        	'kod'	=>	'PBBM'
        ]);

        Bank::create([
        	'nama'	=>	'Public Islamic Bank Berhad',
        	'kod'	=>	'PIBB'
        ]);

        Bank::create([
        	'nama'	=>	'RHB Islamic Bank Berhad',
        	'kod'	=>	'RHBI'
        ]);

        Bank::create([
        	'nama'	=>	'Standard Chartered Bank Malaysia Berhad',
        	'kod'	=>	'SCBM'
        ]);

        Bank::create([
        	'nama'	=>	'Standard Chartered Saadiq Berhad',
        	'kod'	=>	'SCSB'
        ]);
    }
}
