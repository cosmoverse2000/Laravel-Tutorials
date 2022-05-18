<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip_cresent extends Model
{
    use HasFactory;
    public $table = "trip_cresent";
    public $connection = "mysql2";
}
