<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    /**
     * Esta función establece una relación entre la clase
     * actual (Serie) y la clase Routine
     *
     * Relacion de uno a muchos (invertido)
     *
     */
    public function routine(){
        return $this->belongsTo(Routine::class);
    }


    /**
     * Esta función devuelve una colección de instancias de la clase
     * Repetition asociadas a la instancia actual (Serie).
     *
     * Relacion de uno a muchos
     */
    public function series(){
        return $this->hasMany(Repetition::class);
    }
}
