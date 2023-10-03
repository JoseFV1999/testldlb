<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
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
            'nombre' => $this -> faker -> name(),
            'codigo' => $this -> faker -> regexify('[A-Z]{3}[0-9]{3}'),
            'edad' => $this -> faker -> randomNumber(2, false),
        ];
    }
}
