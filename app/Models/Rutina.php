<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    use HasFactory;

    protected $fillable = [
        'ejercicio_id',
        'nombre',
        'objetivo',
        'esquema_series_reps',
        'notas',
    ];

    public function ejercicio()
    {
        return $this->belongsTo(Ejercicio::class);
    }
}
