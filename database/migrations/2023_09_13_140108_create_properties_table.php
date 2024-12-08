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
            $Type = collect(['Residence', 'Commercial','Office','Multipurpose Hall','Industrial','Raw Land']) ->random();
            $Status = collect(['For Rent','For Sale','Rented','Sold'])->random();
            $Additional_features =  collect(['Garden','Backyard','PlayGround',' Traditional Kitchen','Storage','Terrace']) ->random();
           $Kifle_Ketama = collect(['Addis Ketema','Akaki kality','Arada','Bole','Gulele','Kirkos','Kolfe Keraniyo','Lideta','Nefas Silk Lafto','Yeka','Lemikura',]) ->random();
            $Location_city =  collect( ['Addis Ababa', 'Oromia']) ->random();
       
            $Owner_First_Name = collect( ['menilik', 'mohammud']) ->random();
            $Owner_Last_Name = collect( ['ahmed', 'zeleke']) ->random();
           
       
            $Owner_Kifle_Ketama = collect( ['Addis Ketema','Akaki kality','Arada','Bole','Gulele','Kirkos','Kolfe Keraniyo','Lideta','Nefas Silk Lafto','Yeka','Lemikura',]) ->random();
            $Owner_City = collect( ['Addis Ababa', 'Oromia']) ->random();

            $table->id();
            $table->string("Title")->default('');
            $table->string("Area")->default('');
            $table->string("Type")->default($Type);
      
 
            $table->string("Status")->default($Status);
            $table->integer("Assigned_agent")->default(null);
            $table->string("Price")->default('');
            $table->string("Bedroom")->default('');
            $table->string("Parking")->default('');
            $table->string("Bathroom")->default('');
            $table->string("Kitchen")->default('');
            $table->string("Living_room")->default('');
            $table->string("Family_room")->default('');
            $table->string("Total_room")->default('');
            $table->string("Description")->default('');
            $table->string("Additional_features")->default($Additional_features);
            $table->string("Images")->default('https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            $table->string("Videos")->nullable();
          

            $table->string("Location_woreda")->default('') ;
            $table->string("Kifle_Ketama")->default($Kifle_Ketama);
            $table->string("Location_city")->default($Location_city);
            $table->string("Owner_First_Name")->default($Owner_First_Name);
            $table->string("Owner_Last_Name")->default($Owner_Last_Name);
            $table->string("Owner_Phone_no");
            $table->string("Owner_Woreda")->default('');
            $table->string("Owner_Kifle_Ketama")->default($Owner_Kifle_Ketama);
            $table->string("Owner_City")->default($Owner_City);
            $table->string("Owner_Kebele_Id")->default('');
            $table->string("Owner_House_Map")->default('');
            
            
         
         
         
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
