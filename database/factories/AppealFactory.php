<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ticket;
use App\Models\User;

class AppealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userId' => User::factory(),
            'ticketId' => Ticket::factory(),
            'offence' => $this->faker->text,
            'reason'=>$this->faker->text
        ];
    }
}
