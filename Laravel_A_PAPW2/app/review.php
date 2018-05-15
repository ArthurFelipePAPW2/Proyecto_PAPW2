<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $primaryKey = 'id-review';
    protected $fillable = ['id-user','id-videogame','titulo','text-review'];

    public function Usuario(){
        return $this->belongsTo(user::Class,'id-user');
    }

}
