<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;//Para encryptar

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'Maria',
            'lastname' =>'Del Refugio',
            'id_card'=>'12345ASGHT25',
            'specialty' =>'Cardiologia',
            'phone_number' =>'6361254879',
            'hospital' => 'Dublan',
            'email' =>'mariarefu@gmail.com',
            'password' =>Hash::make('4542')
    ]);
             DB::table('users')->insert([
            'name'=>'Juan',
            'lastname' =>'Lopez',
            'id_card'=>'79565GSJABA',
            'specialty' =>'Medicina General',
            'phone_number' =>'6361002125',
            'hospital' => 'Madero',
            'email' =>'juanlo@gmail.com',
            'password' =>Hash::make('5648')
    ]);

         DB::table('users')->insert([
            'name'=>'Jose',
            'lastname' =>'Maria',
            'id_card'=>'23458GSNAIEK',
            'specialty' =>'Órtopedista',
            'phone_number' =>'6364895236',
            'hospital' => 'Juarez',
            'email' =>'josema@gmail.com',
            'password' =>Hash::make('8956')
    ]);

            

    }
}
