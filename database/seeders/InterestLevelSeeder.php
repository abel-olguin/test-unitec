<?php

namespace Database\Seeders;

use App\Models\InterestLevel;
use Illuminate\Database\Seeder;

class InterestLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preparatoria   = InterestLevel::factory()->create(['name' => 'Preparatoria', 'owner_id' => null]);
        $licenciatura   = InterestLevel::factory()->create(['name' => 'Licenciatura', 'owner_id' => null]);
        $posgrado       = InterestLevel::factory()->create(['name' => 'Posgrado', 'owner_id' => null]);
        
        foreach(['Lic. En Derecho','Lic. En Finanzas'] as $item){
            InterestLevel::factory()->create(['name' => $item, 'owner_id' => $licenciatura]);
        }
    
        foreach(['Mtria. Admon. De Negocios','Mtria. Direccion de proyecto'] as $item){
            InterestLevel::factory()->create(['name' => $item, 'owner_id' => $posgrado]);
        }
        
    }
}
