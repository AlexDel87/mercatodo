<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'documento' => $this->faker->randomDigit(),
            'correo' => $this->faker->email(),
            'telefono' => $this->faker->phoneNumber()
        ];
    }
}
