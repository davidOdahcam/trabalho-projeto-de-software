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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(EquipmentSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(AirlineSeeder::class);
        $this->call(AircraftSeeder::class);
        $this->call(PassengerSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(AirportSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(FlightSeeder::class);
        $this->call(BookingSeeder::class);
    }
}
