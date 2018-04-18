<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectorCategory extends Model
{
    protected $fillable = 
    [
        'name', 
        'icon',
        'description',
        'sector_id'
    ];

    public $timestamps = false;

    public function sector()
    {
        return $this->belongsTo(\App\Models\Sector::class);
    }

    public function services()
    {
        return $this->hasMany(\App\Models\Service::class);
    }

}
