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
       
        $photo = [
            'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29uJTIwcGhvdG98ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aWQlMjBwaG90b3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1616254828355-ca07bf256a59?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8aWQlMjBwaG90b3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1612601006505-1254db3e290d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aWQlMjBwaG90b3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ];
        return [
            //
            
            'Attributes'=> $this->faker->sentence(),
            'Agent_Email'=> $this->faker->Email(),
            'Description'=> $this->faker->sentence(),
          
            'Agent_Phone'=> $this->faker->phoneNumber(),
         'Photo'=> $this->faker->randomElement($photo),   
         'Agent_First_Name'=> $this->faker->randomElement(['menilik', 'mohammud']),
         'Agent_Last_Name'=> $this->faker->randomElement(['ahmed', 'zeleke']),
         'Agent_Woreda'=> $this->faker->randomNumber(2, true),
         'Agent_Kifle_Ketama'=> $this->faker->randomElement(['Addis Ketema','Akaki kality','Arada','Bole','Gulele','Kirkos','Kolfe Keraniyo','Lideta','Nefas Silk Lafto','Yeka','Lemikura',]),
         'Agent_City'=> $this->faker->randomElement(['Addis Ababa', 'Oromia']),
         'Agent_Kebele_Id'=> $this->faker->randomNumber(5, true),
       

           

        ];
    }
}
