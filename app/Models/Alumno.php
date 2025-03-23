<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // 🔹 Asegúrate de importar Carbon aquí

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'fecha_nacimiento',
        'ciudad',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date', 
    ];
}


