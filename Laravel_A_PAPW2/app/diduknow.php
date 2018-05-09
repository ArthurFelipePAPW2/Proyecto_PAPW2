<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diduknow extends Model
{
	 protected $table = 'did-u-know';
     protected $primaryKey = 'id-did-u-know';
     protected $fillable = ['texto','id-administrador'];
}
