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
            $table->integer("Assigned_Property_id");
           
            $table->string("Attributes");
            $table->string("Name");
            $table->string("Email");
            $table->string("Phone");
            $table->string("Description");
            $table->timestamps();
            $table->string("Photo")->default("jurica-koletic-7YVZYZeITc8-unsplash.jpg") ;
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
