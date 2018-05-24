<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class score extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id-score';
    protected $fillable = ['id-user','id-videogame','points'];
	protected $dates = ['deleted_at'];
}
