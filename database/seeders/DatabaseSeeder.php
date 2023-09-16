<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agent;
use App\Models\Blog;
use App\Models\User;
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

        User::factory(10)->create();

       Property::factory(10)->create();
       Blog::factory(10)->create();
       Agent::factory(10)->create();
       
      
      /*  Propertygallery::factory((10))->create(); */


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
