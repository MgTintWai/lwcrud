<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Male','Female']);

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'gender' => $gender
        ];
    }
}
