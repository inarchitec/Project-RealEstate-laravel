<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertygallery extends Model
{
    use HasFactory;
    protected $fillable = [

      
        'Property_id',
       'Property_Name',
       'Room_Name',
       'Room_Image',
         
    ];
 
    
  
}
