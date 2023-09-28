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
        Schema::create('agents', function (Blueprint $table) {
            $table->id(); 
           
           
            $table->string("Attributes");
            
            $table->string("Agent_Email");
            $table->string("Agent_Phone");
           
            $table->string("Description");
            $table->timestamps();
            $table->string("Photo")->default("jurica-koletic-7YVZYZeITc8-unsplash.jpg") ;
            
  
            $table->string("Agent_First_Name");
            $table->string("Agent_Last_Name");
           
            $table->string("Agent_Woreda");
            $table->string("Agent_Kifle_Ketama");
            $table->string("Agent_City");
            $table->string("Agent_Kebele_Id");
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
