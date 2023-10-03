<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;
use App\Models\Asignatura;
use App\Models\Alumno;
use App\Models\Reserva;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Asignatura::factory(10)->create();
        Libro::factory(20)->create();
        Alumno::factory(5)->create();
        Reserva::factory(10)->create();
    }
}
