<?php

namespace Database\Factories;

use App\Models\Person;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name(),
                'mail' => $this->faker->unique()->safeEmail(),
                'age' => $this->faker->numberBetween($min = 16, $max = 90)
            ];
    }
}
