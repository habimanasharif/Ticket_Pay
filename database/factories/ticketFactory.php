<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Officer;

class ticketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicleId'=>Vehicle::factory(),
            'userId'=>User::factory(),
            'officerId'=>Officer::factory(),
            'amount'=>$this->faker->numberBetween(100, 1000),
            'location'=>$this->faker->name()
        ];
    }
}
