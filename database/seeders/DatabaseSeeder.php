<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Vehicle::factory(10)->create();
         \App\Models\Ticket::factory(10)->create();
         \App\Models\Officer::factory(10)->create();
         \App\Models\Payment::factory(10)->create();
         \App\Models\Appeal::factory(10)->create();
    }
}
