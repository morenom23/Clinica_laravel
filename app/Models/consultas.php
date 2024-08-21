<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class consultas extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = "consultas";
    protected $fillable = ["id", "nombre", "cedula", "telefono", "correo", "tipo_consulta", "fecha_consulta", "medico_asignado", "created_at", "updated_at"];
}
