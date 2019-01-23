<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   protected $fillable =[
     'nombres',
     'apellido_paterno',
     'apellido_materno',
     'rut',
     'telefono',
     'email',
     'status',
     'fecha_nacimiento'
   ];
}
