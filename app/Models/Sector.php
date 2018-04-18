<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = 
    [
        'name', 
        'description'
    ];

    public $timestamps = false;

    public function sector_categories()
    {
        return $this->hasMany(\App\Models\SectorCategory::class);
    }

}
