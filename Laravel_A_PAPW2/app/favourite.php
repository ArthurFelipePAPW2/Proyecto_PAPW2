<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class favourite extends Model
{
	use SoftDeletes;

    protected $primaryKey = 'id-favourite';
    protected $fillable = ['id-videogame','id-user'];

    public function Videogame(){
        return $this->belongsTo(videogame::Class,'id-videogame');
    }

    protected $dates = ['deleted_at'];
}
