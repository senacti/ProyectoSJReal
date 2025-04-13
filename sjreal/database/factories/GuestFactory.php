<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_guest' => $this->faker->name(),
            'lastname_guest' => $this->faker->lastName(),
            'doc_guest' => $this->faker->word(),
            'num_doc_guest' => $this->faker->numberBetween(10000000, 1000000000),
            'origin_guest'=> $this->faker->word(),
            'phone_guest' => $this->faker->phoneNumber(),
        ];
    }
}
