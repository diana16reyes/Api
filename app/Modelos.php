<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    protected $primaryKey ='modelos_id';

    protected $fillable = ['modelos_id','año'];
}
