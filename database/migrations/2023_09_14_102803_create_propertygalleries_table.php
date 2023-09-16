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
        Schema::create('propertygalleries', function (Blueprint $table) {
            $table->id(); 
            $table->integer("Property_id") ;
            $table->string("Title");
            $table->string("Room_Name");
            $table->string("Room_Image")->default("jurica-koletic-7YVZYZeITc8-unsplash.jpg") ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propertygalleries');
    }
};
