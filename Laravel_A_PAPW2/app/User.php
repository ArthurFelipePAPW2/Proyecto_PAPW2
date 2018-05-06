<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $primaryKey = 'id-user';
    protected $fillable = ['name-user','last-name-user','email-user','pass-user','gender','avatar','birthday','id-city','id-security','answer'];
}
