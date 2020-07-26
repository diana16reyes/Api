<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Usuarios extends Model
{
    use softDeletes;

    protected $primaryKey ='usuario_id';
    protected $fillable = ['usuario_id','foto','name', 'apellidop', 'apellidom','genero','telefono','email','password','placa','comentario','marca_id'];
    protected $date=['deleted_at'];


}
