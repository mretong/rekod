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
        	'nama'	     =>	'PPK HARAPAN MEWAH - ARAU',
        	'kod'	     =>	'A-I',
            'id_wilayah' => '1'
        ]);

        Lokaliti::create([
        	'nama'	=>	'PPK MUDA SEPAKAT - KAYANG',
        	'kod'	=>	'B-I',
            'id_wilayah' => '1'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK BAHAGIA - KANGAR',
            'kod'   =>  'C-I',
            'id_wilayah' => '1'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SETIAJAYA - TAMBUN TULANG',
            'kod'   =>  'D-I',
            'id_wilayah' => '1'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK JAYADIRI - SIMPANG EMPAT',
            'kod'   =>  'E-I',
            'id_wilayah' => '1'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KODIANG',
            'kod'   =>  'A-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SANGLANG',
            'kod'   =>  'B-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KERPAN',
            'kod'   =>  'C-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SINAR BAHAGIA - TUNJANG',
            'kod'   =>  'D-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK USAHAJAYA - KUBANG SEPAT',
            'kod'   =>  'E-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SEMANGAT BARU - JERLUN',
            'kod'   =>  'F-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK EMPAT SERANGKAI - JITRA',
            'kod'   =>  'G-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK TENAGA BARU - KEPALA BATAS',
            'kod'   =>  'H-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KUALA SUNGAI',
            'kod'   =>  'I-II',
            'id_wilayah' => '2'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK MUDA JAYA KINABALU - HUTAN KAMPUNG',
            'kod'   =>  'A-III',
            'id_wilayah' => '3'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK GERAK MAJU - ALOR SENIBONG',
            'kod'   =>  'B-III',
            'id_wilayah' => '3'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK AMAN - TAJAR',
            'kod'   =>  'C-III',
            'id_wilayah' => '3'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SILATURRAHIM - TITI HAJI IDRIS',
            'kod'   =>  'D-III',
            'id_wilayah' => '3'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK KOBAH',
            'kod'   =>  'E-III',
            'id_wilayah' => '3'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK PENDANG',
            'kod'   =>  'F-III',
            'id_wilayah' => '3'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SERI PANTAI - BATAS PAIP',
            'kod'   =>  'A-IV',
            'id_wilayah' => '4'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK TUN ADAM MALIK - PENGKALAN KUNDOR',
            'kod'   =>  'B-IV',
            'id_wilayah' => '4'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SUKA SETIA - KANGKONG',
            'kod'   =>  'C-IV',
            'id_wilayah' => '4'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK USAHAPADU - PERMATANG BULUH',
            'kod'   =>  'D-IV',
            'id_wilayah' => '4'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK BUKIT BESAR',
            'kod'   =>  'E-IV',
            'id_wilayah' => '4'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SUNGAI LIMAU DALAM',
            'kod'   =>  'F-IV',
            'id_wilayah' => '4'
        ]);

        Lokaliti::create([
            'nama'  =>  'PPK SERI JERAI - GUAR CEMPEDAK',
            'kod'   =>  'G-IV',
            'id_wilayah' => '4'
        ]);
    }
}
