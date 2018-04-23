<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
     
    protected $fillable = ['id', 'room', 'building', 'date_mod', 'date_creation'];
    
    public $timestamps = false;
}
