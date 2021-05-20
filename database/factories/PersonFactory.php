<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(App\Models\Peason::class, function (Faker $faker) {
            static $password;

            return [
                'name' => $this->faker->name(),
                'email' => $this->faker->unique()->safeEmail(),
                'age' => $this->faker->randomDigit(2)
            ];
        });
    }
}
