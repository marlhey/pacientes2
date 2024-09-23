<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConsultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('consultation')->insert([
            'consultation_date'=> date('Y-m-d'),
            'discharge_date'=>'2024-11-23',
            'diagnosis'=>'Fractura de Tibia',
            'treatment'=>'Cirujia',
            'other_data'=>'Necesita donantes de sangre',
            'observations'=>'Tiene hosteoporosis',
            'id_user'=>3,
            'id_patient'=>1
    ]);
         DB::table('consultation')->insert([
            'consultation_date'=> date('Y-m-d'),
            'discharge_date'=>'2024-10-03',
            'diagnosis'=>'Apendicitis',
            'treatment'=>'Cirujia',
            'other_data'=>'Persona adulta',
            'observations'=>'Alto riesgo la persona es hipertensa',
            'id_user'=>2,
            'id_patient'=>2
    ]);
         DB::table('consultation')->insert([
            'consultation_date'=> date('Y-m-d'),
            'discharge_date'=>'2024-09-30',
            'diagnosis'=>'Resfrio',
            'treatment'=>'Paracetamol',
            'other_data'=>'Es alegico a los antigripales',
            'observations'=>'Debe comer caldito de pollo',
            'id_user'=>2,
            'id_patient'=>3
    ]);
    }
}
