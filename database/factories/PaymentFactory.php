<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Payment;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Payment::class;
    public function definition()
    {
        
        return [
            'ticketId'=>Ticket::factory(),
            'userId'=>User::factory(),
            'amount'=>$this->faker->numberBetween(100, 1000),
            'status'=>$this->faker->name()
        ];
    }
}
