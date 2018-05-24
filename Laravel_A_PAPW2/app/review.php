<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class review extends Model
{
	use SoftDeletes;
	
    protected $primaryKey = 'id-review';
    protected $fillable = ['id-user','id-videogame','titulo','text-review'];

    public function Usuario(){
        return $this->belongsTo(user::Class,'id-user');
    }
    protected $dates = ['deleted_at'];
}
