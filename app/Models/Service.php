<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = 
    [
        'name', 
        'description', 
        'target_public', 
        'quick_help', 
        'requirements',
        'type',
        'sector_category_id',
        'slt_id', 
        'localizable',
    ];

    public $timestamps = false;

    public function sector(){

        return $this->belongsTo(\App\Models\SectorCategory::class);
    }

}
