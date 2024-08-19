<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    // Especificar la clave primaria
    protected $primaryKey = 'idusuario';

    public $timestamps = false; // Desactiva los timestamps automáticos

    protected $keyType = 'string'; // Si 'idusuario' es un string

    protected $fillable = [
        'idusuario', 'nombre', 'correo', 'password', 'tipo',
    ];

    // protected $hidden = [
    //     'password',
    // ];
}


    // use HasFactory;

    // protected $primaryKey = 'idusuario';

    // public $timestamps = false;




