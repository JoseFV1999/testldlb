<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;


use App\Models\Libro;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'fecha_devolucion' => date($format = 'Y-m-d'),
            'alumno_id' => Alumno::inRandomOrder()->first()->id,
            'libro_id' => Libro::inRandomOrder()->first()->id,
        ];
    }
}
