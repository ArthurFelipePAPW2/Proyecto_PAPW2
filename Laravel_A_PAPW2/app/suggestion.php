<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class suggestion extends Model
{
	use SoftDeletes;
	
    protected $primaryKey = 'id-suggestion';
    protected $fillable = ['game-suggested', 'reason', 'id-user', 'id-administrador','link'];
    protected $dates = ['deleted_at'];

    public function Usuario(){
    	return $this->belongsTo(user::Class,'id-user');
    }
}
