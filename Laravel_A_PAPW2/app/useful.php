<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\review;

class useful extends Model
{
    protected $primaryKey = 'id-useful';
    protected $fillable = ['id-user', 'id-review'];

    public function Review(){
        return $this->belongsTo(review::Class,'id-review');
    }
}
