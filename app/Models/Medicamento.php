<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $primaryKey = 'idmedicamento';
    protected $table = 'medicamentos';
    public $timestamps = false;

}
