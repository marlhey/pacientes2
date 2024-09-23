<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(PacientesSeeder::class);//Tener cuidado con el orden primero son las tablas sin llaves foraneas y luego las que si tienen
        $this->call(ConsultasSeeder::class);
    }
}
