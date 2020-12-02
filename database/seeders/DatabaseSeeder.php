<?php

namespace Database\Seeders;

use App\Models\InterestLevel;
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
        $this->call(InterestLevelSeeder::class);
        $this->call(MaritalStatusSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
