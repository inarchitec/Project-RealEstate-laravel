<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dash extends Model
{
    use HasFactory;
    protected $table = "house";
    protected $fillable = [
        "title",
        "price",
        "area",
        "photo"
    ];
}
