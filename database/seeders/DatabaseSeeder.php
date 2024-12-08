<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\User;
use App\Models\Agent;
use App\Models\Gallary;
 
use App\Models\Property;
 
use App\Models\Propertygallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        User::factory(100)->create();

       Property::factory(10)->create();
         Gallary::factory(400)->create();  
       Blog::factory(20)->create();
       Agent::factory(20)->create();
     
    }
}
