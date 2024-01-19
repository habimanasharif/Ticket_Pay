<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class officerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sName' => $this->faker->name(),
            'fName' => $this->faker->name(),
        ];
    }
}
