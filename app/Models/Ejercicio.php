<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'grupo_muscular',
        'dificultad',
        'descripcion',
    ];

    public function rutinas()
    {
        return $this->hasMany(Rutina::class);
    }
}
