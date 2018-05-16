<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    protected $primaryKey = 'id-favourite';
    protected $fillable = ['id-videogame','id-user'];

    public function Videogame(){
        return $this->belongsTo(videogame::Class,'id-videogame');
    }
}
