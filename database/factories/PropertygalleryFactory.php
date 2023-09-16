<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Propertygallery>
 */
class PropertygalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
        
       
           'Property_id' => $this->faker()->randomNumber(2, true),
            "Title" => $this->faker()->sentence(),
          "Room_Name" => $this->faker()->word(),
        /*   "Room_Image"  => $this->faker()->word(), */
            
        ];
    }
}
