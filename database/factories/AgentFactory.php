<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Assigned_Property_id'=> $this->faker->randomNumber(1, true),
            'Attributes'=> $this->faker->sentence(),
            'Name'=> $this->faker->name(),
            'Email'=> $this->faker->Email(),
            'Phone'=> $this->faker->phoneNumber(),
            'Description'=> $this->faker->sentence(),
         /*  'Photo'=> $this->faker->sentence(),  */
           

        ];
    }
}
