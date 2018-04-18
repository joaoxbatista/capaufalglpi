<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    
    protected $fillable = [
    	'user_id',
    	'first_name',
    	'last_name',
    	'phone1',
    	'phone2',
    	'email',
    	'cpf',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
