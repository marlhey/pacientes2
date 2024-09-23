<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('patients')->insert([
            'name'=>'Angelica',
            'lastname'=>'Lopez',
            'address'=>'El prado',
            'postcode'=>'31803',
            'locality'=>'Dublan',
            'province'=>'Nuevo Casas Grandes',
            'birthdate'=>'1999-12-01',
            'sex'=>'Femenino',
            'security_number'=>'HCG45678LJ1',
            'phone_number'=>'6361125896'
        ]);
        DB::table('patients')->insert([
            'name'=>'Juan',
            'lastname'=>'Romero',
            'address'=>'Laguna de los patos',
            'postcode'=>'31703',
            'locality'=>'Colonia Pri',
            'province'=>'Nuevo Casas Grandes',
            'birthdate'=>'1980-11-21',
            'sex'=>'Masculino',
            'security_number'=>'DAGSY8936523JSGD',
            'phone_number'=>'6366359874'
        ]);
        DB::table('patients')->insert([
            'name'=>'Josefino',
            'lastname'=>'Parra',
            'address'=>'Las Lomas de Chapultepec',
            'postcode'=>'32503',
            'locality'=>'Pancho Villa',
            'province'=>'Janos',
            'birthdate'=>'2008-03-05',
            'sex'=>'Masculino',
            'security_number'=>'GAJSBNMSG123548',
            'phone_number'=>'6365481723'
        ]);
    }
}
