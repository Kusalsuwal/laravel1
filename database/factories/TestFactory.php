<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->username,
            'password' => $this->faker->password,
            'number' => $this->faker->phoneNumber,
            'image' => $this->faker->image,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'pan' => Str::random(10), // Generates a random PAN number
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}
