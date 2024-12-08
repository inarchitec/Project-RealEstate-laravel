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
        $Type =  ['Residence', 'Commercial','Office','Multipurpose Hall','Industrial','Raw Land'];
        $Status =['For Rent','For Sale','Rented','Sold'] ;
        $Additional_features = ['Garden','Backyard','PlayGround',' Traditional Kitchen','Storage','Terrace'];
       $Kifle_Ketama = ['Addis Ketema','Akaki kality','Arada','Bole','Gulele','Kirkos','Kolfe Keraniyo','Lideta','Nefas Silk Lafto','Yeka','Lemikura'];
        $Location_city =  ['Addis Ababa', 'Oromia'];
   
        $Owner_First_Name = ['menilik', 'mohammud'];
        $Owner_Last_Name = ['ahmed', 'zeleke'];
       
   
        $Owner_Kifle_Ketama = ['Addis Ketema','Akaki kality','Arada','Bole','Gulele','Kirkos','Kolfe Keraniyo','Lideta','Nefas Silk Lafto','Yeka','Lemikura'];
        $Owner_City = ['Addis Ababa', 'Oromia'];
        $Images = ['https://images.unsplash.com/photo-1694112406735-cafd2fa1e913?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDN8TThqVmJMYlRSd3N8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 
        'https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmVkcm9vbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60',
        'https://images.unsplash.com/photo-1615874959474-d609969a20ed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YmVkcm9vbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
    ];
    $Videos = ['https://youtu.be/4jnzf1yj48M',
     'https://youtu.be/y9j-BL5ocW8',
     'https://youtu.be/mJVuZiK9a6I'
    ];
    
        return [
            //
           
            'Title'=> $this->faker->word(),
       'Area'=> $this->faker->randomNumber(3, true),    
       'Type'=> $this->faker->randomElement($Type), 
         
            'Status'=> $this->faker->randomElement($Status),  
            'Assigned_agent'=> $this->faker->randomDigit(),
          'Price'=> $this->faker->randomNumber(7, true),  
            'Bedroom'=> $this->faker->randomDigit(),
            'Parking'=> $this->faker->randomDigit(),
            'Bathroom'=> $this->faker->randomDigit(),
            'Kitchen'=> $this->faker->randomDigit(),
            'Living_room'=> $this->faker->randomDigit(),
            'Family_room'=> $this->faker->randomDigit(),
            'Total_room'=> $this->faker->randomDigit(),
            'Description'=> $this->faker->sentence(),
         'Additional_features'=> $this->faker->randomElement($Additional_features), 

            'Images'=> $this->faker->randomElement($Images),
             'Videos'=> $this->faker->randomElement($Videos), 
 'Location_woreda'=> $this->faker->randomNumber(2, true), 
 'Kifle_Ketama'=> $this->faker->randomElement($Kifle_Ketama), 
 'Location_city'=> $this->faker->randomElement( $Location_city),
        'Owner_First_Name'=> $this->faker->randomElement( $Owner_First_Name),
            'Owner_Last_Name'=> $this->faker->randomElement( $Owner_Last_Name),    
            'Owner_Phone_no'=> $this->faker->phoneNumber(),
             'Owner_Woreda'=> $this->faker->randomNumber(2, true), 
             'Owner_Kifle_Ketama'=> $this->faker->randomElement( $Owner_Kifle_Ketama),
            'Owner_City'=> $this->faker->randomElement($Owner_City),  
             'Owner_Kebele_Id'=> $this->faker->randomNumber(5, true),
            'Owner_House_Map'=> $this->faker->randomNumber(5, true),  
         
        ];
    }
}
