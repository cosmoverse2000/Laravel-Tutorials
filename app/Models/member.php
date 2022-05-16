<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    public $timestamps = false;

    function setNameAttribute($value)
    {
        return $this->attributes['Name'] = "Mr " . ucFirst($value);
    }
    function setAddressAttribute($value)
    {
        return $this->attributes['address'] = "$value, India";
    }
}
