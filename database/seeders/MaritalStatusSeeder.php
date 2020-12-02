<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaritalStatus::factory()->create(['name' => 'Single']);
        MaritalStatus::factory()->create(['name' => 'Divorced']);
        MaritalStatus::factory()->create(['name' => 'Married']);
    }
}
