<?php

namespace Database\Factories;

use App\Models\InterestLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

class InterestLevelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InterestLevel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_id' => function(){return InterestLevel::factory()->create(); },
            'name' => $this->faker->text(10)
        ];
    }
}
