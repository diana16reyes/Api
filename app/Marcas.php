<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model

{
    protected $primaryKey ='marca_id';

    protected $fillable = ['marca_id','name'];
}
