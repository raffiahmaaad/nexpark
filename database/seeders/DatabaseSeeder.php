<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            ParkingSlotSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
