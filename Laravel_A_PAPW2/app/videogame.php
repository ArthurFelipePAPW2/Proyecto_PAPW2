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

    public function Distributor(){
        return $this->belongsTo(distributor::Class,'id-distributor');
    }

    public function Developer(){
        return $this->belongsTo(distributor::Class,'id-developer');
    }

    public function ForPlatforms(){
        return $this->hasManyThrough(platform::Class,forplatform::Class,'id-videogame','id-platform');
    }

    public function ForGenres(){
        return $this->hasManyThrough(gender::Class,havegender::Class,'id-videogame','id-gender');
    }
}
