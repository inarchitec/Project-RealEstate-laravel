<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("Title");
            $table->string("Area");
            $table->string("Status");
            $table->string("Price");
            $table->string("Bedroom");
            $table->string("Parking");
            $table->string("Bathroom");
            $table->string("Kitchen");
            $table->string("Living_room");
            $table->string("Family_room");
            $table->string("Total_room");
            $table->string("Description");
            $table->string("Additional_features");
            $table->string("Images")->default('https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            $table->string("Videos")->nullable();
            $table->string("Location_city");
            $table->string("Location_woreda_kebele");
         
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
