<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre'=>$this->faker->text(100),
            'apellido_paterno'=>$this->faker->text(100),
            'apellido_materno'=>$this->faker->text(100),
            'fecha_nacimiento'=>$this->faker->date(),
            'telefono'=>$this->faker->unique()->numerify('9########'),
            'direccion'=>$this->faker->optional()->text(255),
            'dni'=>$this->faker->unique()->numerify('########'),
            'ingreso'=>$this->faker->dateTime(),
            'salida'=>$this->faker->dateTime(),
        ];
    }
}
