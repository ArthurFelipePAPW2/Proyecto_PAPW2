<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $primaryKey = 'id-user';
    protected $fillable = ['name-user','last-name-user','email-user','pass-user','gender','avatar','birthday','id-city','id-security','answer'];

    public function Country(){
        return $this->hasManyThrough(country::Class,city::Class,'id-city','id-country');
    }

    public function City(){
        return $this->belongsTo(city::Class,'id-city');
    }
}