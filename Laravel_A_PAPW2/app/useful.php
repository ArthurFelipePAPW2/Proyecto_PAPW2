<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\review;

class useful extends Model
{
	use SoftDeletes;

    protected $primaryKey = 'id-useful';
    protected $fillable = ['id-user', 'id-review'];

    public function Review(){
        return $this->belongsTo(review::Class,'id-review');
    }

    protected $dates = ['deleted_at'];
}
