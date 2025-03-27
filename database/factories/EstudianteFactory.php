<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "usuario_id" => User::factory(),
            "nombres" => $this->faker->firstName,
            "apellidos" => $this->faker->lastName,
            "ci" => $this->faker->unique()->numerify("#######"),
            'fecha_nacimiento' => $this->faker->date("Y-m-d", "2000-12-31"),
            "telefono" => $this->faker->numerify("########"),
            "ref_celular" => $this->faker->numerify("########"),
            "parentesco" => $this->faker->randomElement(["Padre", "Madre", "Hermano", "Tio"]),
            "profesion" => $this->faker->jobTitle,
            "direccion" => $this->faker->address,
            "foto" => "estudiante.jpg",
            "estado" => $this->faker->randomElement(["activo", "inactivo"])
        ];
    }
}
