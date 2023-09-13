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
            $table->string("Images");
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
