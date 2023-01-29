<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    /**
     * Esta función establece una relación entre la clase
     * actual (Exercise) y la clase Routine
     *
     * Relacion de uno a muchos (invertido)
     *
     */
    public function routine(){
        return $this->belongsTo(Routine::class);
    }

    /**
     * Esta función establece la relación entre el modelo actual
     * Exercise y el modelo Muscle.
     *
     * Relacion de muchos a muchos
     */
    public function muscles(){
        return $this->belongsToMany(Muscle::class);
    }

}
