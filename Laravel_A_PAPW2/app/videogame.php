<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videogame extends Model
{
    protected $primaryKey = 'id-videogame';
    protected $fillable = [
    	'name-videogame',
    	'cover',
    	'description',
    	'mode',
    	'id-administrador',
    	'id-distributor',
    	'id-developer',
    	'productor'
    ];
}
