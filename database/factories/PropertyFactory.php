<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
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
         
            'Title'=> $this->faker->word(),
            'Area'=> $this->faker->randomNumber(3, true),
            'Status'=> $this->faker->word(),
            'Price'=> $this->faker->randomNumber(7, true),
            'Bedroom'=> $this->faker->randomDigit(),
            'Parking'=> $this->faker->randomDigit(),
            'Bathroom'=> $this->faker->randomDigit(),
            'Kitchen'=> $this->faker->randomDigit(),
            'Living_room'=> $this->faker->randomDigit(),
            'Family_room'=> $this->faker->randomDigit(),
            'Total_room'=> $this->faker->randomDigit(),
            'Description'=> $this->faker->sentence(),
            'Additional_features'=> $this->faker->word(),

/*             'Images'=> $this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true),
 */           /*  'Videos'=> $this->faker->Videos(), */
            'Location_city'=> $this->faker->word(),
            'Location_woreda_kebele'=> $this->faker->word(),
         
        ];
    }
}
