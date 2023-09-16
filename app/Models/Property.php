<?php

namespace App\Models;

use App\Models\Propertygallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
   
    use HasFactory;
    protected $fillable = [
    
        'Title',
            'Area',
            'Status',
            'Price',
            'Bedroom',
            'Parking',
            'Bathroom',
            'Kitchen',
            'Living_room',
            'Family_room',
            'Total_room',
            'Description',
            'Additional_features',
            'Images',
            'Videos',
            'Location_city',
            'Location_woreda_kebele',
        
    ];
    
}
