<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['nombre','ingresos','contacto','telefono','fecha_consulta','comentarios', 'gestionado'];
}
