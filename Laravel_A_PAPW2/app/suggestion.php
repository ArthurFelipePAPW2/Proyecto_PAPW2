<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggestion extends Model
{
    protected $primaryKey = 'id-suggestion';
    protected $fillable = ['game-suggested', 'reason', 'id-user', 'id-administrador'];
}
