<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;
    protected $table = '_estudiantes';
    protected $fillable = [
        'nom_estudiante',
        'ape_estudiante',
        'direccion',
        'telefono',
        'tipo_de_doc',
        'num_documento'
    ];
}
