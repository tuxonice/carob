<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address' => '1234567890',
            'zipcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'vat_number' => '1234567890',
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'remarks' => $this->faker->text(50),
            'user_id' => User::inRandomOrder()->first(),
            'active' => true,
        ];
    }
}
