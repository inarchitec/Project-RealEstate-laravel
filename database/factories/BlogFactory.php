<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
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
           /*  $table->id();
            $table->string('title');
            $table->string('bloger');
            $table->string('image');
            $table->string('content'); */
            'title'=> $this->faker->title(),
            'Bloger'=> $this->faker->sentence(),
            'Image'=> $this->faker->image(null, 640, 480),
            'Content'=> $this->faker->sentence(),
        ];
    }
}
