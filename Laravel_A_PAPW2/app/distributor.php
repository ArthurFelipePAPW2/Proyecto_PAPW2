<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $primaryKey = 'id-distributor';
    protected $fillable = ['name-distributor','id-country'];


}
