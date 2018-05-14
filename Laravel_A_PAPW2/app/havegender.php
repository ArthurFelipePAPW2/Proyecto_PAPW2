<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class havegender extends Model
{	
	 protected $table = 'have-genders';
     protected $primaryKey = 'id-belongs';
     protected $fillable = ['id-videogame','id-gender'];
}
