<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{
    use HasFactory;
    protected $table = 'tareas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'atendido',
        'entrega',
    ];

    // protected $guarded = ['id', 'timestamps'];
}
