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
        	'nama'	=>	'PPK HARAPAN MEWAH - ARAU',
        	'kod'	=>	'A-I'
        ]);

        Lokaliti::create([
        	'nama'	=>	'PPK MUDA SEPAKAT - KAYANG',
        	'kod'	=>	'B-I'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK BAHAGIA - KANGAR',
            'kod'   =>  'C-I'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SETIAJAYA - TAMBUN TULANG',
            'kod'   =>  'D-I'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK JAYADIRI - SIMPANG EMPAT',
            'kod'   =>  'E-I'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KODIANG',
            'kod'   =>  'A-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SANGLANG',
            'kod'   =>  'B-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KERPAN',
            'kod'   =>  'C-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SINAR BAHAGIA - TUNJANG',
            'kod'   =>  'D-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK USAHAJAYA - KUBANG SEPAT',
            'kod'   =>  'E-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SEMANGAT BARU - JERLUN',
            'kod'   =>  'F-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK EMPAT SERANGKAI - JITRA',
            'kod'   =>  'G-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK TENAGA BARU - KEPALA BATAS',
            'kod'   =>  'H-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KUALA SUNGAI',
            'kod'   =>  'I-II'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK MUDA JAYA KINABALU - HUTAN KAMPUNG',
            'kod'   =>  'A-III'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK GERAK MAJU - ALOR SENIBONG',
            'kod'   =>  'B-III'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK AMAN - TAJAR',
            'kod'   =>  'C-III'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SILATURRAHIM - TITI HAJI IDRIS',
            'kod'   =>  'D-III'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KOBAH',
            'kod'   =>  'E-III'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK PENDANG',
            'kod'   =>  'F-III'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SERI PANTAI - BATAS PAIP',
            'kod'   =>  'A-IV'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK TUN ADAM MALIK - PENGKALAN KUNDOR',
            'kod'   =>  'B-IV'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SUKA SETIA - KANGKONG',
            'kod'   =>  'C-IV'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK USAHAPADU - PERMATANG BULUH',
            'kod'   =>  'D-IV'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK BUKIT BESAR',
            'kod'   =>  'E-IV'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SUNGAI LIMAU DALAM',
            'kod'   =>  'F-IV'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SERI JERAI - GUAR CEMPEDAK',
            'kod'   =>  'G-IV'
        ]);
    }
}
