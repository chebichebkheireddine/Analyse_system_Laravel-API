<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lab>
 */
class LabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            "name_lab"=>$this->faker->name(),
            "Email"=>$this->faker->email(),
            "password"=>$this->faker->password(),
            "Address"=>$this->faker->address(),
            "tlpn"=>$this->faker->phoneNumber(),
        ];
    }
}
