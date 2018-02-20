<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'		=> 'Suhairi Abdul Hamid',
        	'email'		=> 'suhairi81@gmail.com',
        	'password'	=> bcrypt('suhairi'),
            'status'    => '1'
        ]);

        User::create([
            'name'      =>  'Mohd Akmal Alias',
            'email'     =>  'mretong@gmail.com',
            'password'  =>  bcrypt('akmal'),
            'status'    => '1'
        ]);
    }
}
