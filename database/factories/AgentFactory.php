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
     /*        $table->id();
         $table->string("Attributes");
            $table->string("Name");
            $table->string("Email");
            $table->string("Phone");
            $table->string("Description");
            $table->timestamps(); */
            'Attributes'=> $this->faker->sentence(),
            'Name'=> $this->faker->name(),
            'Email'=> $this->faker->Email(),
            'Phone'=> $this->faker->phoneNumber(),
            'Description'=> $this->faker->sentence(),
           

        ];
    }
}
