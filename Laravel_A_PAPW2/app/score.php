<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    protected $primaryKey = 'id-score';
    protected $fillable = ['id-user','id-videogame','points'];

}
