<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forplatform extends Model
{	
	 protected $table = 'for-platforms';
     protected $primaryKey = 'id-platform';
     protected $fillable = ['id-videogame','id-platform'];
 }
